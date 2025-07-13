# Viewcomposer
    

# 順番
    1. ViewComposer用のサービスプロバイダー作成
    2. app.phpにプロバイダーを登録
    3. データをビューと結合させるためのComposerクラスを作成
    4. 1で作成したサービスプロバイダーへの設定


# 作り方
　php artisan make:provider ListProvide
    Provider [app/Providers/ListProvider.php] created successfully.

    まとめてここに書く
    boot()
        処理を書く
    
    register()
        許可する範囲を指定する

# 指定の仕方
　config/app.php
    'providers' => [
        App\Providers\ListProvider::class,  <= 追加
    ],





