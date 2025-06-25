# Requestの作り方
　php artisan make:request TodoListRequest
    Request [app/Http/Requests/TodolistRequest.php] created successfully.

# 書き方
  ## authorize()
     リクエストが認可されるかどうか
    if($this->path() === ""){
        return true;
    }

    return false;

    これを書いておけばいい

  ## rules()
    バリデーションを書く
  