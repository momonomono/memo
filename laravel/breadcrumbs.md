# パンくずリストの作成
 パッケージをダウンロード
 composer require diglactic/laravel-breadcrumbs

 パンくずリストを定義するファイルを作成
 web/breadcrumbs.php
    Breadcrumbs::for('top', function ($trail) {
        $trail->push('表示する名前', route("ルート名");
    });

    Breadcrumbs::for('top', function ($trail) {
        $trail->push('top', route('top'));
    });

    Breadcrumbs::for('home', function ($trail) {
        $trail->parent('Home');
        $trail->push('TodoList',route('selecter'));
    });

# パンくずリストのレイアウト
    php artisan vender:publish --tag=breadcrumbs-config
    config/breadcrumbs.php
    