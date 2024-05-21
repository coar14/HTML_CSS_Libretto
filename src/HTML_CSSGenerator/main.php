/*

## CSS 
## Authored By:
- Eugene Henri Apostol

## Collaborated By:
- Hugh Vergara

*/


/*

## HTML
## Authored By:
- Maricor Masong

## Collaborated By:
- Mary Mae Diane Rizaldo

*/



<?php



require_once 'autoload.php';
require_once 'autoloader.php';

use Headings\HtmlStylerH1;
use Headings\HtmlStylerH2;
use Headings\HtmlStylerH3;
use Headings\HtmlStylerH4;
use Headings\HtmlStylerH5;
use Headings\HtmlStylerH6;
use Paragraph\P_tag;
use Image\imgTag;
use Span\spanTag;
use Button\buttonTag;
use Div\divTag;
use ListNamespace\OrderedList;
use ListNamespace\ListTag;
use ListNamespace\UnorderedList;
use Section\sectionTag;
use textStructure\abbreviationTag;
use textStructure\citeTag;
use textStructure\codeTag;
use textStructure\definitionTag;
use textStructure\sampleTag;
use textStructure\variableTag;
use ContentGrouping\articleTag;
use ContentGrouping\asideTag;
use ContentGrouping\footerTag;
use ContentGrouping\mainTag;
use ContentGrouping\navTag;
use Address\addressTag;
use Anchor\anchorTag;
use Quotation\blockquoteTag;
use Quotation\quoteTag;
use Strong\strongTag;
use Em\emTag;
use Input\inputTag;
use Label\labelTag;
use TextArea\textareaTag;
use TableSpace\tableTag;
use TableSpace\trTag;
use TableSpace\tdTag;
use HtmlTag\htmlTag;
use Body\bodyTag;
use Star\starTag;
use Header\headerTag;
use Star\figureTag;
use Media\MediaQueryStyler;
use HtmlGenerator\Html;


// $filePath = 'C:\\Codes\\sp_elec_web\\finalProjectsaweb\\projectfromeugene\\project\\src\\CSSGenerator\\output.html';

$html = new Html();
$htmlContent = $html->html()
    ->head()
    ->meta()->setAttribute('charset', 'UTF-8')->closeBracket()
    ->meta()->setAttribute('name', 'viewport')->setAttribute('content', 'width=device-width, initial-scale=1.0')->closeBracket()
    ->link()->setAttribute('rel', 'stylesheet')->setAttribute('href', 'styles/libretto.css')->closeBracket()
    ->link()->setAttribute('rel', 'stylesheet')->setAttribute('href', 'styles.css')->closeBracket()
    ->title()->setText('Libretto Books')->closeTag('title')
    ->closeTag('head')
    ->body()->closeBracket()
    //for section id=header
    ->section()->idAttribute('id','header')->closeBracket()
    ->section()->idAttribute('id','lefthead')->closeBracket()->closeTag('section')
    ->section()->idAttribute('id','righthead')->closeBracket()->closeTag('section')
    ->closeTag('section')
    //end for section id=header

    //2. section id=mainmenubar
    ->section()->idAttribute('id','mainmenubar')->closeBracket()
    //for ul id=mainmenu
    ->ul()->idAttribute('id','mainmenu')->closeBracket()
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Home')->closeTag('a')
    ->closeTag('li')
    //li Reading
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Reading')->closeTag('a')

    //for ul class=sub1'
    ->ul()->setAttribute('class','sub1')->closeBracket()
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Novels')->closeTag('a')
    ->closeTag('li')
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Hardbound')->closeTag('a')
    ->closeTag('li')
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Paperback')->closeTag('a')
    ->closeTag('li')
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Comics')->closeTag('a')
    ->closeTag('li')
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Categories')->closeTag('a')
    ->closeTag('li')
    //end ul class=sub1 and li for Reading
    ->closeTag('ul')
    ->closeTag('li')

    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Featured')->closeTag('a')
    ->closeTag('li')
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Orders')->closeTag('a')
    ->closeTag('li')
    ->li()
    ->a()->setAttribute('href','#')->closeBracket()
    ->setText('Deal &amp; Offers')->closeTag('a')
    ->closeTag('li')
    ->closeTag('ul')
    ->closeTag('section') //close of mainmenubar section

    //new section for maincontainer
    ->section()->idAttribute('id','maincontainer')->closeBracket()
    ->section()->idAttribute('id','headline')->closeBracket()
    //section for headleft
    ->section()->idAttribute('id','headlleft')->closeBracket()
    ->img()
    ->setAttribute('src','images/hunger_games_trilogy.jpg')
    ->setAttribute('title','The Hunger Games Trilogy')
    ->setAttribute('alt','The Hunger Games Trilogy')->closeSBracket()
    ->closeTag('section')
    //section for headlright
    ->section()->idAttribute('id','headlright')->closeBracket()->br()->br()
    ->span()
    ->setAttribute('class','headlineimpact')->closeBracket()
    ->setText('Special Offer!!!')
    ->closeTag('span')->br()
    ->span()
    ->setAttribute('class','headlinetext')->closeBracket()
    ->setText('Limited Stocks Only!!!')
    ->closeTag('span')->br()
    ->closeTag('section') //</headlright>
    ->closeTag('section')
    //new section id=left and right
    ->section()->idAttribute('id','left')->closeBracket()->closeTag('section')
    ->section()->idAttribute('id','right')->closeBracket()
    //span blockheadings
    ->span()->setAttribute('class','blockheadings')->closeBracket()
    ->setText('Book News')->closeTag('span')
    //section for placeholder
    ->section()->idAttribute('id','placeholder')->closeBracket()
    //section for sections
    ->section()->setAttribute('class','sections')->closeBracket()
    ->p()->setText('Literature')->closeTag('p')
    //span for sectiontext
    ->span()->setAttribute('class','sectiontext')->closeBracket()
    ->setText('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum.&quot;')
    ->closeTag('span')
    ->closeTag('section')
    ->section()->setAttribute('class','sections')->closeBracket()
    // this is for ARTS
    ->p()->setText('Arts')->closeTag('p')
    //span for sectiontext
    ->span()->setAttribute('class','sectiontext')->closeBracket()
    ->setText('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum.&quot;')
    ->closeTag('span')
    ->closeTag('section')->br()
    ->section()->setAttribute('class','sections')->closeBracket()
    //this is for DRAMA
    ->p()->setText('Drama')->closeTag('p')
    //span for sectiontext
    ->span()->setAttribute('class','sectiontext')->closeBracket()
    ->setText('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum.&quot;')
    ->closeTag('span')
    ->closeTag('section')
    ->section()->setAttribute('class','sections')->closeBracket()
    //this is for SCIENCE/FICTION
    ->p()->setText('Science/Fiction')->closeTag('p')
    //span for sectiontext
    ->span()->setAttribute('class','sectiontext')->closeBracket()
    ->setText('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum.&quot;')
    ->closeTag('span')
    ->closeTag('section')
    ->br()
    ->section()->setAttribute('class','sections')->closeBracket()
    // this is for HORROR
    ->p()->setText('Horror')->closeTag('p')
    //span for sectiontext
    ->span()->setAttribute('class','sectiontext')->closeBracket()
    ->setText('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum.&quot;')
    ->closeTag('span')
    ->closeTag('section')
    ->section()->setAttribute('class','sections')->closeBracket()
    // this is for LOVE STORY
    ->p()->setText('Drama')->closeTag('p')
    //span for sectiontext
    ->span()->setAttribute('class','sectiontext')->closeBracket()
    ->setText('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum.&quot;')
    ->closeTag('span')
    ->closeTag('section')
    ->closeTag('section')
    ->closeTag('section')
    ->closeTag('section')
    ->section()->idAttribute('id','footer')->closeBracket()
    ->span()->idAttribute('id','copyrighttext')->closeBracket()
    ->setText('Copyright &copy; International Web Development, All rights reserved 2013')
    ->closeTag('span')
    ->closeTag('section')->br()

    ->closeTag('body')
    ->close();

    if ($html->save('output.html')) {
        echo "HTML file saved successfully!";
      } else {
        echo "An error occurred while saving the file.";
      }






/*****CSS*******/

$html = file_get_contents('output.html');
$styler = new starTag();
$styler->addStyle('margin','0px')
    ->addStyle('padding', '0px')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new bodyTag();
$styler->addStyle('margin-top','20px')
    ->addStyle('background-color', '#ccc')
    ->addStyle('font-family','arial,verdana,tahoma,sans-serif')
    ->applyStyles();
file_put_contents('output.html', $html);


$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#header')
    ->addStyle('margin','0 auto')
    ->addStyle('width', '1000px')
    ->addStyle('min-height','200px')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#lefthead')
    ->addStyle('height','200px')
    ->addStyle('width', '200px')
    ->addStyle('background','#fff url("images/libretto2_200px.png") no-repeat')
    ->addStyle('border-top-left-radius','25px')
    ->addStyle('float','left')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#righthead')
    ->addStyle('height','200px')
    ->addStyle('width', '800px')
    ->addStyle('background','#fff url("images/libretto_banner.png") no-repeat')
    ->addStyle('border-top-right-radius','25px')
    ->addStyle('float','left')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#mainmenubar')
    ->addStyle('margin','0 auto')
    ->addStyle('width', '1000px')
    ->addStyle('height','35px')
    ->addStyle('background-color','#fff')
    ->addStyle('border-bottom','2px solid black')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#maincontainer')
    ->addStyle('overflow','hidden')
    ->addStyle('margin', '0 auto')
    ->addStyle('width','1000px')
    ->addStyle('height','auto')
    ->addStyle('background-color','#fff')
    ->addStyle('border-bottom','1px solid black')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#headline')
    ->addStyle('width','1000px')
    ->addStyle('height', '350px')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#headlleft img')
    ->addStyle('display','block')
    ->addStyle('padding-top', '40px')
    ->addStyle('margin','0 auto')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#headlleft')
    ->addStyle('width','600px')
    ->addStyle('float','left')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#headlright')
    ->addStyle('width','400px')
    ->addStyle('float','left')
    ->applyStyles();
file_put_contents('output.html', $html);


$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#left')
    ->addStyle('width','300px')
    ->addStyle('min-height','200px')
    ->addStyle('height','auto')
    ->addStyle('background-color','#fff')
    ->addStyle('float','left')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#right')
    ->addStyle('width','700px')
    ->addStyle('height','auto')
    ->addStyle('background-color','#fff')
    ->addStyle('float','left')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#right .blockheadings')
    ->addStyle('display','block')
    ->addStyle('font-family','"Arial Narrow", arial, sans-serif')
    ->addStyle('font-size','30px')
    ->addStyle('color','#fff')
    ->addStyle('padding','10px')
    ->addStyle('background-color','#65A9D6')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#right #placeholder')
    ->addStyle('margin','0 auto')
    ->addStyle('height','auto')
    ->addStyle('padding-top','30px')
    ->addStyle('width','600px')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#right .sections')
    ->addStyle('padding','2px')
    ->addStyle('float','left')
    ->addStyle('margin-right','50px')
    ->addStyle('margin-bottom','50px')
    ->addStyle('width','220px')
    ->addStyle('min-height','50px')
    ->addStyle('border-top-left-radius','10px')
    ->addStyle('border-top-right-radius','10px')
    ->addStyle('border','1px solid #ccc')
    ->addStyle('font-size','12px')
    ->applyStyles();
file_put_contents('output.html', $html);


$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#right .sections p')
    ->addStyle('border-top-left-radius','10px')
    ->addStyle('border-top-right-radius','10px')
    ->addStyle('background-color','#65A9D6')
    ->addStyle('font-family','"Arial Narrow", arial, sans-serif')
    ->addStyle('font-size','30px')
    ->addStyle('color','#fff')
    ->addStyle('padding-left','5px')
    ->addStyle('height','40px')
    ->applyStyles();
file_put_contents('output.html', $html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#right .sectiontext')
    ->addStyle('text-align','justify')
    ->applyStyles();
file_put_contents('output.html',$html);


$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#footer')
    ->addStyle('margin','0 auto')
    ->addStyle('width','1000px')
    ->addStyle('min-height','200px')
    ->addStyle('background-color','#000')
    ->addStyle('border-bottom-left-radius','25px')
    ->addStyle('border-bottom-right-radius','25px')
    ->addStyle('position','relative')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#headlright .headlineimpact')
    ->addStyle('display','block')
    ->addStyle('font-family','tahoma,sans-serif')
    ->addStyle('font-size','45px')
    ->addStyle('font-weight','normal')
    ->addStyle('color','#00f')
    ->addStyle('text-align','center')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#headlright .headlinetext')
    ->addStyle('display','block')
    ->addStyle('font-family','arial,verdana,sans-serif')
    ->addStyle('font-size','30px')
    ->addStyle('font-weight','normal')
    ->addStyle('color','#f00')
    ->addStyle('text-align','center')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#footer #copyrighttext')
    ->addStyle('display','block')
    ->addStyle('text-align','right')
    ->addStyle('font-size','13px')
    ->addStyle('color','#fff')
    ->addStyle('position','absolute')
    ->addStyle('bottom','20px')
    ->addStyle('right','10px')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new sectionTag();
$styler->setSelector('#footer #copyrighttext')
    ->addStyle('display','block')
    ->addStyle('text-align','right')
    ->addStyle('font-size','13px')
    ->addStyle('color','#fff')
    ->addStyle('position','absolute')
    ->addStyle('bottom','20px')
    ->addStyle('right','10px')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu, .sub1, .sub2')
    ->addStyle('list-style','none')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu li ')
    ->addStyle('width','125px')
    ->addStyle('position','relative')
    ->addStyle('float', 'left')
    ->addStyle('margin-right','4px')
    ->addStyle('text-align','center')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu a ')
    ->addStyle('font-weight','bold')
    ->addStyle('background-color','#fff')
    ->addStyle('color', '#000')
    ->addStyle('text-decoration','none')
    ->addStyle('display','block')
    ->addStyle('width','125px')
    ->addStyle('height','35px')
    ->addStyle('line-height','35px')
    ->applyStyles();
file_put_contents('output.html',$html);


$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu .sub1 a ')
    ->addStyle('font-size','12px')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu li:hover> a ')
    ->addStyle('background-color','#237281')
    ->addStyle('color','#fff')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu li:hover a:hover ')
    ->addStyle('background-color','aqua')
    ->addStyle('color','#000')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu .sub1 ')
    ->addStyle('display','none')
    ->addStyle('position','absolute')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu .sub2 ')
    ->addStyle('display','none')
    ->addStyle('position','absolute')
    ->addStyle('top','0px')
    ->addStyle('left','127px')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu li:hover .sub1 ')
    ->addStyle('display','block')
    ->applyStyles();
file_put_contents('output.html',$html);

$html = file_get_contents('output.html');
$styler = new UnorderedList();
$styler->setSelector('#mainmenu .sub1 li:hover .sub2 ')
    ->addStyle('display','block')
    ->applyStyles();
file_put_contents('output.html',$html);

