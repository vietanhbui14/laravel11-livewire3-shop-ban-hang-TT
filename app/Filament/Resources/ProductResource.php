<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $modelLabel = 'Sản phẩm';
    protected static ?string $pluralModelLabel = 'Sản phẩm';
    protected static ?string $navigationLabel = 'Sản phẩm';

    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Thông tin sản phẩm')->schema([

                        TextInput::make('name')
                            ->label('Tên sản phẩm')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $state, $operation, $set) {
                                if ($operation !== 'create') {
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            }),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->disabled()
                            ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true),

                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->label('Mô tả')
                            ->fileAttachmentsDirectory('products'),

                        MarkdownEditor::make('short_description')
                            ->columnSpanFull()
                            ->label('Mô tả ngắn')
                            ->fileAttachmentsDirectory('products'),

                        TextInput::make('sku')
                            ->label('Mã sản phẩm')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                    ])->columns(2),

                    Section::make('Hình ảnh')->schema([
                        FileUpload::make('images')
                            ->label('Hình ảnh')
                            ->multiple()
                            ->directory('products')
                            ->maxFiles(5)
                            ->reorderable()
                    ]),

                    Section::make('SEO')->schema([

                        TextInput::make('meta_title')
                            ->label('Tiêu đề')
                            ->maxLength(255),

                        Textarea::make('meta_description')
                            ->label('Mô tả')
                            ->autosize(),

                        TextInput::make('meta_keywords')
                            ->label('Từ khóa')
                            ->maxLength(255),

                    ])
                ])->columnSpan(2),

                Group::make()->schema([

                    Section::make('Giá')->schema([
                        TextInput::make('price')
                            ->label('Giá')
                            ->numeric()
                            ->required()
                            ->prefix('₫')
                    ]),

                    Section::make('Liên kết')->schema([

                        Select::make('category_id')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('category', 'name')
                            ->label('Danh mục'),

                        Select::make('brand_id')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('brand', 'name')
                            ->label('Thương hiệu'),
                    ]),

                    Section::make('Trạng thái')->schema([

                        Toggle::make('in_stock')
                            ->required()
                            ->default(true)
                            ->label('Có sẵn'),

                        Toggle::make('is_active')
                            ->required()
                            ->default(true)
                            ->label('Hoạt động'),

                        Toggle::make('is_featured')
                            ->required()
                            ->label('Nổi bật'),

                        Toggle::make('on_sale')
                            ->required()
                            ->label('Khuyến mãi'),

                    ])

                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('brand.name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->money('VND')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),

                Tables\Columns\IconColumn::make('in_stock')
                    ->boolean(),

                Tables\Columns\IconColumn::make('on_sale')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'name'),

                SelectFilter::make('brand')
                    ->relationship('brand', 'name'),

                Filter::make('is_featured')
                    ->toggle(),

                Filter::make('in_stock')
                    ->toggle(),

                Filter::make('on_sale')
                    ->toggle(),

                Filter::make('is_active')
                    ->toggle()
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()->requiresConfirmation(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
