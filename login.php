<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?=$dir?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?></title>
<style type="text/css">
/* HTML elements  */        

    h1, h2, h3, h4, h5, h6{
        font-weight:normal;
        margin:0;
        line-height:1.1em;
        color:#000;
        }    
    h1{font-size:2em;margin-bottom:.5em;}    
    h2{font-size:1.75em;margin-bottom:.5142em;padding-top:.2em;}    
    h3{font-size:1.5em;margin-bottom:.7em;padding-top:.3em;}
    h4{font-size:1.25em;margin-bottom:.6em;}
    h5,h6{font-size:1em;margin-bottom:.5em;font-weight:bold;}
    
    p, blockquote, ul, ol, dl, form, table, pre{line-height:inherit;margin:0 0 1.5em 0;}
    hr{display:none;}    
/* //  HTML elements */    

/* base */

body, table, input, textarea, select, li, button{
    font:1em "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    line-height:1.5em;
    color:#444;
    }    
body{
    font-size:12px;
    background:#ffffff;        
    text-align:center;
    }        

/* // base */

/* login form */    

#login{
    margin:2em auto;
    background:#fff;
    border:8px solid #eee;
    width:500px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -moz-box-shadow:0 0 10px #4e707c;
    -webkit-box-shadow:0 0 10px #4e707c;
    box-shadow:0 0 10px #4e707c;
    text-align:left;
    position:relative;
    }
#login a, #login a:visited{color:#0283b2;}
#login a:hover{color:#111;}
#login h1{
    background:#0092c8;
    color:#fff;
    text-shadow:#007dab 0 1px 0;
    font-size:14px;
    padding:18px 23px;
    margin:0 0 1.5em 0;
    border-bottom:1px solid #007dab;
    }
#login .register{
    position:absolute;
    float:left;
    margin:0;
    line-height:30px;
    top:-40px;
    right:0;
    font-size:11px;
    }
#login p{margin:.5em 25px;}
#login div{
    margin:.5em 25px;
    background:#eee;
    padding:4px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;
    text-align:right;
    position:relative;
    }    
#login label{
    float:left;
    line-height:30px;
    padding-left:10px;
    }
#login .field{
    border:1px solid #ccc;
    width:280px;
    font-size:12px;
    line-height:1em;
    padding:4px;
    -moz-box-shadow:inset 0 0 5px #ccc;
    -webkit-box-shadow:inset 0 0 5px #ccc;
    box-shadow:inset 0 0 5px #ccc;
    }    
#login div.submit{background:none;margin:1em 25px;text-align:left;}    
#login div.submit label{float:none;display:inline;font-size:11px;}    
#login button{
    border:0;
    padding:0 30px;
    height:30px;
    line-height:30px;
    text-align:center;
    font-size:12px;
    color:#fff;
    text-shadow:#007dab 0 1px 0;
    background:#0092c8;
    -moz-border-radius:50px;
    -webkit-border-radius:50px;
    border-radius:50px;
    cursor:pointer;
    }
   input.searchButton{
     font-size: 16px;
     font-weight: bold;
     padding: 1px 10px 1px 10px;
     margin: 4px 4px 0px 2px;
    }
.error
{
    border: 1px solid;
    margin: 0px 0px;
    padding: 5px 10px 5px 5px;
    background-repeat: no-repeat;
    background-position : 10px center;
    font-size: 16px;
    font-weight : bold;
    width  : 350px;
    color: #D8000C;
    background-color : #FFBABA;
}
.langdiv
{
   float: left;
}
.drinfo
{
   font-family: Arial;
   padding-left: 200px;
   padding-right : 200px;
}
.eninfo
{
   padding-left: 200px;
   padding-right : 200px;
}
/* //  login form */    
        
</style>
<script type="text/javascript">
function redirectIT (sel,page) {
	var url = sel[sel.selectedIndex].value;
	window.location = page+url;
}
</script>
 <center>
    
    <img alt="Afghanistan" title="Case Management System | سیستم مدیریت قضایای افغانستان" src="<?=base_url()?>images/af_logo.png" width="150" height="150" /> 
    <h1>بسم الله الرحمن الرحیم</h1> 
    <h2>سیستم مدیریت قضایای افغانستان <br /> Afghanistan Case Management System  </h2> 
    
    
 </center>
  
     <?php
     $attributes = array('id' => 'login','name'=>'login');
     echo form_open('login', $attributes); 
    ?> 
    <div>
        <label for="lang"><strong><?=$language?>:</strong></label> 
        <select id="lang" name="lang" onchange="redirectIT(this,'<?=base_url()?>login/');">
             <?=$lang_opt?>
        </select>
    </div>
    
    <div>
        <label for="login_username"><strong><?=$username?>:</strong></label> 
        <input type="text" name="login" id="login_username" dir="ltr" class="field required" title="Please provide your username" />
    </div>
    <div>
        <label for="login_password"><strong><?=$password?>:</strong></label>
        <input type="password" name="password" id="login_password" dir="ltr" class="field required" title="Password is required" />
    </div>
    <div class="submit">
        <input type="hidden" name="__vid" id="__vid" value="<?=$vid?>" autocomplete="off"/>
        <input type="hidden" name="__sid" id="__sid" value="<?=$sid?>" autocomplete="off"/>
        <input type="submit" name="button" id="button" class="searchButton" title="" value="<?=$login?>"/>
        <?php
          if($this->session->flashdata('msg'))
          {
             echo "<div class=\"error\">".$this->session->flashdata('msg')."</div>";
          }
         if(form_error('login'))
         {
            echo "<div class=\"error\">"."Invalid username and password."."</div>";
         }
        ?>
    </form>  
    </div>
    <div dir="rtl" class="drinfo">این یک بانک معلوماتی داخلی است ومربوط به دولت جمهوری اسلامی افغانستان میباشد.این سیستم تنها برای استفاده اشخاص رسمی مربوط به ارگان های عدلی وقضائی است.دستر سی بدون مجوزیا استفاده اشخاص غیر مسئول،مطابق به قانون افغانستان مورد پیگرد قانونی قرار خواهد گرفت.</div>
    <div dir="ltr" class="eninfo">This is an internal database and is the property of the Islamic Republic of Afghanistan. It is for authorized use only. Unauthorized access or use of this system will be prosecuted to fullest extent under law.</div>
  </body>
</html>