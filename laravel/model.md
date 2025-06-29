# 書くこと
    - fillableとguardedの設定
    - 任意のメソッド
    - Eloquentで発行するSQL
        - SQLはコントローラに書いても良いが、コントローラのソースコードが長くなると読みにくくなるため、モデルに書くのがおすすめ。
        - モデルに書いた場合はコントローラから呼び出す必要あり。

# fillable, guarded
    protected $fillable = [
        'title', 'status', 'detail'
    ];

    fillable : 変更できるものを書く
    guarded : 変更しないものを書く

# トレイトの記述
    書くだけで効果がある

    softDelete
        delete_atを用意してsoftdeleteを書くと勝手にnullかどうか判断する
    
    