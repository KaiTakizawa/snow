/* global $ */
$(function () {
    let like = $('.like-toggle'); //like-toggleのついたiタグを取得し代入。
    let likeAreaId; //変数を宣言
    like.on('click', function () { //onはイベントハンドラー
    
      let $this = $(this); //this=イベントの発火した要素＝iタグを代入
      likeAreaId = $this.data('area-id'); //iタグに仕込んだdata-post-idの値を取得
      console.log(likeAreaId);
      //ajax処理スタート
      $.ajax({
        headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
        url: '/areas/like', //通信先アドレスで、このURLをあとでルートで設定します
        method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
        data: { //サーバーに送信するデータ
          'area_id': likeAreaId //いいねされた投稿のidを送る
        },
      })
      //通信成功した時の処理
      .done(function (data) {
        console.log('success');
        $this.toggleClass('liked'); //likedクラスのON/OFF切り替え。
        $this.next('.like-counter').html(data.area_likes_count);
      })
      //通信失敗した時の処理
      .fail(function () {
        console.log('fail'); 
      });
    });
});