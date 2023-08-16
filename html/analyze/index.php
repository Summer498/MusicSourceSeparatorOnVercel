<?php
function saveTmpFile($name)
{
  $uploaded = $_FILES[$name];
  // print_r(shell_exec("ls /tmp"));
  if (isset($uploaded)) {
    $name = $uploaded["name"];
    $tmp_name = $uploaded["tmp_name"];

    $from = $tmp_name;
    $to = "/uploads/{$name}";
    if (!move_uploaded_file($from, $to)) {
      echo ("Failed to save file." . "<BR>");
      return null;
    }
    return $to;
  }
  return null;
}
?>
<?php
/*
setlocale(LC_ALL, 'ja_JP.UTF-8');
$song_file_path = saveTmpFile("upload");  // apache では upload に送信した音楽が保存される
$song_file_name = basename($song_file_path);
$song_file_ext = pathinfo($song_file_name)["extension"];
$chords = shell_exec("/var/www/html/MusicAnalyzer-server/mimicopy.sh \"{$song_file_path}\" --quiet");
$melodies = shell_exec("/var/www/html/MusicAnalyzer-server/manalyze.sh \"{$song_file_path}\" --quiet");
*/
?>
<html lang="ja">

<head>
  <title>分析結果</title>
  <meta http-equiv="content-language" content="ja" charset="utf-8">
  <link rel="stylesheet" href="contents_wrapper.css" type="text/css">
</head>

<body>
  <h1>分析結果</h1>
  <?php
  /*
  $m_src = "src=\"../../resources/$song_file_name\""; // media source
  $m_opt = "controls autoplay playsinline loop crossorigin=\"use-credintials\""; // media option
  $m_type = (in_array($song_file_ext, ["mp4"], true)) ? "video" : "audio"; // media type
  echo ("<div class=\"${m_type}_wrapper\" id=\"audio_area\">");
  echo ("<$m_type $m_src $m_opt></$m_type>");
  echo ("</div>");
  */
  ?>
  <div id="piano-roll-place"></div>
</body>

</html>
<?php
/*
// バックエンドで計算した結果に合わせてスクリプトを自動生成
echo ("<script>");
// result が JSON フォーマットで送られてくるので, JavaScript オブジェクトとして代入する
echo ("if(window.MusicAnalyzer===undefined){window.MusicAnalyzer={roman:undefined,melody:undefined}}");
echo ("window.MusicAnalyzer.roman={$chords};");
echo ("window.MusicAnalyzer.melody={$melodies};");
echo ("</script>\n");
// 静的スクリプトを送る
// echo ("<script src=\"./show_roman.js\"type=\"module\"></script>");
*/
?>