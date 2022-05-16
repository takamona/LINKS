<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>トピック投稿</title>
</head>
<body>
  <!-- fullcalendar-3.10.0 -->
  <!-- 必要jsの読み込み -->
  <script src="{{ asset('https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js')}}"></script>
  <script src="{{ asset('https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js')}}"></script>
  <script src="{{ asset('https://school.oohara.jp/oohara/fullcalendar.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('/css/topic_post.css')}}"/>
  <link rel="stylesheet" href="{{ asset('https://school.oohara.jp/oohara/fullcalendar.css')}}"/>
  <nav>
  <ul class="nav">
    <!--<li>-->
    <!--  <a href="/">TOP</a>-->
    <!--  <img class="top" src="{{ asset('images/top.jpg')}}">-->
    <!--</li>-->
    <li>
      <a href="/mypage">マイページ</a>
      <img class="myp" src="{{ asset('images/komyu.jpeg')}}">
    </li>
  </ul>
  </nav>
   <div class="logout">
      <ul>
         <li>
          <a href="/logout">ログアウト</a>
        </li>
      </ul>
   </div>  
  <div class="border"></div>
  <div class="osirase">
    <ul>
      <li>
        <img class="pencil" src="{{ asset('images/pencil.png')}}">{{ $community->name}}のトピックス
      </li>
    </ul>
  </div>
  <div class="gmain">
    <div class="kaku">
      <table border="3">
        <tr>
        <th class="nkaku">
        <div class="pe">
          <input type="button" value="トピック投稿" class="modoru">
          <div>
            <img class="pencil2" src="{{ asset('images/pencil.png')}}">
          </div>
        </div>
        </th>
        </tr>
      </table>
      <div class="calendar">
        <div id="cal"></div>
      </div>
    </div>
    <div></div>
    <div class="title">
      <div class="bitiran">
        <table border="3">
          <tr>
          <th colspan=2>トピック一覧
          </th>
          <th>
        </div>
        <tr>
        <th colspan=2>
        <!--<input type="checkbox" name="check">全てチェックする -->
        <tr>
        <th colspan=2>
        <input type="checkbox" name="check">タイトル　
        <div>編集する</div>
        <tr>
        <th>トピック
        </th>
        <th>
        <form action="/communities/{{ $community->id }}/topics" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">  
              <input type="hidden" name="community_id" value="{{ $community->id }}">
              <input placeholder="タイトル" name="title" class="tc">
              </th>
              </tr>
              <tr>
              <th>本文
              </th>
              <th>
              <textarea placeholder="本文" name="content" class="honbun"></textarea>
              </th>
              <tr>
              <th>写真
              </th>
              <th>
              <div id="upload">
                <img id="img" src="{{asset('images/profilesample.png')}}">
                <div class="up1">画像を変更する</div>
                <div style="display:none">
                  <input type="file" name="image" id="uploadFile2">
                </div>
              </div>
              </th>
              </tr>
              <tr>
              <th>公開範囲
              </th>
              <td>
              <input type="radio" name="disdosure_range" value="0">全体に公開 
              <input type="radio" name="disdosure_range" value="1">友人まで 
              <input type="radio" name="disdosure_range" value="2">コミュニティ参加者のみ
              </td>
              </tr>
              <tr>
              <td colspan=2 class="r">
              <input type="button" class="re" value="入力内容を確認する">
            </table>
          </div>
        </div>
        <div class="over">
          <div>投稿してもよろしいでしょうか？ 
            <br>
            <input type="submit" value="投稿">
            <input type="button" value="戻る" class="modoru">
          </div>
        </div>
      </form>
  <div class="nikkikaku"></div>
  <script src="{{asset('/js/topic_post.js')}}"></script>
</body>