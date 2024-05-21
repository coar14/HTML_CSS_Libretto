# CSS & HTML  Generator Usage Instructions



## Introduction
This guide provides step-by-step instructions on how to use our CSS Generator to style your HTML files.

## Steps to Use the CSS Generator

### 1. Specify the HTML File You Want to Style
First, read the content of your HTML file into a variable using PHP's `file_get_contents` function.

 Example:  `$html = file_get_contents('output.html');`


### 2. Select the Tag You Want to Style
Create an instance for the tag you wish to style. For example, if you're styling a `<body>` tag:

 Example: `$styler = new bodyTag();`


### 3. Set Selector
If you need to specify a particular element or class, use the `setSelector` method.

 Example: `$styler->setSelector('#header');`


#### 4. Hover Styles and Pseudo-Classes
To apply styles on hover, append `:hover` to your selector.

 Example : `styler->setSelector('#header:hover'); // Or styler->setSelector('ul:hover');`


#### . Multiple Tags, IDs, or Classes
Combine selectors to target complex structures.

Example: `$styler->setSelector('#mainmenu.sub1 li:hover.sub2');`

#### .  Nth childs 
Using -nth childs
 Example: `$styler->setSelector(.parent :nth-child(2n))`


#### . Add Styles
Use the `addStyle` method to define CSS properties and values.

Example: `$styler->addStyle('display', 'block');`


### . Apply the Styles
Finally, apply the styles to your HTML content.

Example: `$styler->addStyle('display', 'block');`


#### . Method Chaining
Chain methods together for convenience.

Example: ` $styler->addStyle('display', 'block')->addStyle('color', 'red');`


### .5 Apply the Styles
Finally, apply the styles to your HTML content.

Example: `$styler->applyStyle()`


### 6. Write the Contents Back to the HTML File
Save the modified HTML content back to your file.

Example: `file_put_contents('output.html', $html);`


## Conclusion
By following these steps, you can effectively generate and apply CSS styles to your HTML files using our CSS Generator. This tool simplifies the process of adding dynamic styles to your web projects.





# HTML
**HTML Generator Document using PHP**

| <!----> | <!----> | <!----> |
| --- | --- | --- |
| **Function name** | **Return** | **Description** |
| html() | `<!DOCTYPE html>\n<html lang=\"en\">\n` | The &lt;!DOCTYPE html&gt; declaration defines that this document is an HTML5 documentThe &lt;html&gt; element is the root element of an HTML page |
| head() | `<head>\n` | The &lt;head&gt; element contains meta information about the HTML page |
| meta() | `<meta` | meta tags are HTML tags used to provide additional information about a page to search engines and other clients. |
| link() | `<link` | link is used to link other web pages to a document |
| title() | `<title>` | The &lt;title&gt; element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab) |
| body() | `<body` | The &lt;body&gt; element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc. |
| close() | `</html>` | The HTML document itself begins with &lt;html&gt; and ends with &lt;/html&gt;. |

**For HTML Tags Ordered Alphabetically**

| <!----> | <!----> | <!----> |
| --- | --- | --- |
| **Function name** | **Return** | **Description** |
| a() | `<a` | Defines a hyperlink |
| abbr() | `<abbr` | Defines an abbreviation or an acronym |
| address() | `<address` | Defines contact information for the author/owner of a document |
| article() | `<article>` | Defines an article |
| aside() | `<aside>` | Defines content aside from the page content |
| br() | `<br>\n` | Defines a single line break |
| button() | `<button>` | Defines a clickable button |
| cite() | `<cite>` | Defines the title of a work |
| code() | `<code>` | Defines a piece of computer code |
| div() | `<div` | Defines a section in a document |
| em() | `<em>` | Defines emphasized text |
| footer() | `<footer>` | Defines a footer for a document or section |
| h1() - h6() | `<h1<h6>` | Defines HTML headings |
| img() | `<img` | Defines an image |
| input() | `<input` | Defines an input control |
| label() | `<label` | Defines a label for an &lt;input&gt; element |
| nav() | `<nav>` | Defines navigation links |
| ol() | `<ol>` | Defines an ordered list |
| p()prole() | `<p><p` | Defines a paragraph.Defines a paragraph for class or id. |
| q() | `<q>` | Defines a short quotation |
| samp() | `<samp>` | Defines sample output from a computer program |
| section() | `<section` | Defines a section in a document |
| span() | `<span ` | Defines a section in a document |
| strong() | `<strong>` | Defines important text |
| table() | `<table>` | Defines a table |
| textarea() | `<textarea>` | Defines a multiline input control (text area) |
| td() | `<td` | Defines a cell in a table |
| tr() | `<tr` | Defines a row in a table |
| ul() | `<ul` | Defines some text that is unarticulated and styled differently from normal text |
| var() | `<var>` | Defines a variable |

**Other functions needed for HTML using PHP**

| <!----> | <!----> | <!----> |
| --- | --- | --- |
| **Function name** | **Return** | **Example** |
| setAttribute(‘ ‘, ‘ ‘) | `$attribute=\"$value\"` | setAttribute(‘class’,’menubar’)setAttribute(‘href’,’#’)setAttribute('src','images/hunger\_games\_trilogy.jpg')setAttribute('title','The Hunger Games Trilogy')setAttribute('alt','The Hunger Games Trilogy') |
| idAttribute(‘ ’,’ ‘) | `$attribute=\"$value\"` | idAttribute(‘id’, ‘fname’)idAttribute('id','placeholder') |
| setText() | `$text` | Display text for html |
| closeBracket() | `>` | Needed for tag with no closing or end of tagex. prole()-&gt;closeBracket()&lt;p &gt;a()-&gt;setAttribute('href','#')-&gt;closeBracket() |
| closeSBracket() | `/>` | Needed for tag with “ /&gt;” |
| closeTag(‘ ‘) | `</$value>` | Shortcut for closing a tag of any value |







