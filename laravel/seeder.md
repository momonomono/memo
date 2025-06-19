# 作り方
php artisan make:seeder SampleSeeder

database/seederに保存

# Seederの書き方

    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }

# DatabaseSeederに記述

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class
        ]);
    }

# Seeder実行

php artisan db:seed

# Seederの削除
php artisan migrate:fresh --seed
