<?php  /// $Id: javascript.php,v 1.33.2.1 2007/05/15 07:48:34 moodler Exp $
       /// Load up any required Javascript libraries

    if (!defined('MOODLE_INTERNAL')) {
        die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
    }

    if (!empty($CFG->aspellpath)) {      // Enable global access to spelling feature.
        echo '<script type="text/javascript" src="'.$CFG->httpswwwroot.'/lib/speller/spellChecker.js"></script>'."\n";
    }

    if (!empty($CFG->editorsrc) ) {
        foreach ( $CFG->editorsrc as $scriptsource ) {
            echo '<script type="text/javascript" src="'. $scriptsource .'"></script>'."\n";
        }
    }

?>
<!--<style type="text/css">/*<![CDATA[*/ body{behavior:url(<?php echo $CFG->httpswwwroot ?>/lib/csshover.htc);} /*]]>*/</style>-->

<script type="text/javascript" src="<?php echo $CFG->httpswwwroot ?>/lib/javascript-static.js"></script>
<script type="text/javascript" src="<?php echo $CFG->httpswwwroot ?>/lib/javascript-mod.php"></script>
<script type="text/javascript" src="<?php echo $CFG->httpswwwroot ?>/lib/overlib.js"></script>
<script type="text/javascript" src="<?php echo $CFG->httpswwwroot ?>/lib/cookies.js"></script>
<script type="text/javascript" src="<?php echo $CFG->httpswwwroot ?>/lib/ufo.js"></script>

<script type="text/javascript" defer="defer">

//<![CDATA[

setTimeout('fix_column_widths()', 20);

function openpopup(url,name,options,fullscreen) {
  fullurl = "<?php echo $CFG->httpswwwroot ?>" + url;
  windowobj = window.open(fullurl,name,options);
  if (fullscreen) {
     windowobj.moveTo(0,0);
     windowobj.resizeTo(screen.availWidth,screen.availHeight);
  }
  windowobj.focus();
  return false;
}

function uncheckall() {
  void(d=document);
  void(el=d.getElementsByTagName('INPUT'));
  for(i=0;i<el.length;i++) {
    void(el[i].checked=0);
  }
}

function checkall() {
  void(d=document);
  void(el=d.getElementsByTagName('INPUT'));
  for(i=0;i<el.length;i++) {
    void(el[i].checked=1);
  }
}

function inserttext(text) {
<?php
    if (!empty($SESSION->inserttextform)) {
        $insertfield = "opener.document.forms['$SESSION->inserttextform'].$SESSION->inserttextfield";
    } else {
        $insertfield = "opener.document.forms['theform'].message";
    }
    echo "  text = ' ' + text + ' ';\n";
    echo "  if ( $insertfield.createTextRange && $insertfield.caretPos) {\n";
    echo "    var caretPos = $insertfield.caretPos;\n";
    echo "    caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;\n";
    echo "  } else {\n";
    echo "    $insertfield.value  += text;\n";
    echo "  }\n";
    echo "  $insertfield.focus();\n";
?>
}
<?php if (!empty($focus)) {
    if(($pos = strpos($focus, '.')) !== false) {
        //old style focus using form name - no allowed inXHTML Strict
        $topelement = substr($focus, 0, $pos);
        echo "function setfocus() { if(document.$topelement) document.$focus.focus(); }\n";
    } else {
        //focus element with given id
        echo "function setfocus() { if(el = document.getElementById('$focus')) el.focus(); }\n";
    }
} ?>

//]]>
</script>
