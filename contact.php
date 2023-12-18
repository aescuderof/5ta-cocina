<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table>
  <tbody>
    <tr id="line-1">
      <td><pre>&lt;?php  </pre></td>
    </tr>
    <tr id="line-2"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-2">
      <td><pre>   </pre></td>
    </tr>
    <tr id="line-3"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-3">
      <td><pre>if($_POST) {  </pre></td>
    </tr>
    <tr id="line-4"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-4">
      <td><pre>    $visitor_name = "";  </pre></td>
    </tr>
    <tr id="line-5"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-5">
      <td><pre>    $visitor_email = "";  </pre></td>
    </tr>
    <tr id="line-6"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-6">
      <td><pre>    $email_title = "";  </pre></td>
    </tr>
    <tr id="line-7"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-7">
      <td><pre>    $concerned_department = "";  </pre></td>
    </tr>
    <tr id="line-8"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-8">
      <td><pre>    $visitor_message = "";  </pre></td>
    </tr>
    <tr id="line-9"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-9">
      <td><pre>    $email_body = "&lt;div&gt;";  </pre></td>
    </tr>
    <tr id="line-10"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-10">
      <td><pre>       </pre></td>
    </tr>
    <tr id="line-11"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-11">
      <td><pre>    if(isset($_POST['visitor_name'])) {  </pre></td>
    </tr>
    <tr id="line-12"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-12">
      <td><pre>        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);  </pre></td>
    </tr>
    <tr id="line-13"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-13">
      <td><pre>        $email_body .= "&lt;div&gt;    </pre></td>
    </tr>
    <tr id="line-14"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-14">
      <td><pre>                           &lt;label&gt;&lt;b&gt;Visitor Name:&lt;/b&gt;&lt;/label&gt;&amp;nbsp;&lt;span&gt;".$visitor_name."&lt;/span&gt;    </pre></td>
    </tr>
    <tr id="line-15"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-15">
      <td><pre>                        &lt;/div&gt;";  </pre></td>
    </tr>
    <tr id="line-16"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-16">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-17"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-17">
      <td><pre></pre></td>
    </tr>
    <tr id="line-18"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-18">
      <td><pre>    if(isset($_POST['visitor_email'])) {  </pre></td>
    </tr>
    <tr id="line-19"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-19">
      <td><pre>        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);  </pre></td>
    </tr>
    <tr id="line-20"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-20">
      <td><pre>        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);  </pre></td>
    </tr>
    <tr id="line-21"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-21">
      <td><pre>        $email_body .= "&lt;div&gt;    </pre></td>
    </tr>
    <tr id="line-22"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-22">
      <td><pre>                           &lt;label&gt;&lt;b&gt;Visitor Email:&lt;/b&gt;&lt;/label&gt;&amp;nbsp;&lt;span&gt;".$visitor_email."&lt;/span&gt;    </pre></td>
    </tr>
    <tr id="line-23"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-23">
      <td><pre>                        &lt;/div&gt;";  </pre></td>
    </tr>
    <tr id="line-24"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-24">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-25"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-25">
      <td><pre>       </pre></td>
    </tr>
    <tr id="line-26"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-26">
      <td><pre>    if(isset($_POST['email_title'])) {  </pre></td>
    </tr>
    <tr id="line-27"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-27">
      <td><pre>        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);  </pre></td>
    </tr>
    <tr id="line-28"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-28">
      <td><pre>        $email_body .= "&lt;div&gt;    </pre></td>
    </tr>
    <tr id="line-29"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-29">
      <td><pre>                           &lt;label&gt;&lt;b&gt;Reason For Contacting Us:&lt;/b&gt;&lt;/label&gt;&amp;nbsp;&lt;span&gt;".$email_title."&lt;/span&gt;    </pre></td>
    </tr>
    <tr id="line-30"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-30">
      <td><pre>                        &lt;/div&gt;";  </pre></td>
    </tr>
    <tr id="line-31"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-31">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-32"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-32">
      <td><pre>       </pre></td>
    </tr>
    <tr id="line-33"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-33">
      <td><pre>    if(isset($_POST['concerned_department'])) {  </pre></td>
    </tr>
    <tr id="line-34"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-34">
      <td><pre>        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);  </pre></td>
    </tr>
    <tr id="line-35"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-35">
      <td><pre>        $email_body .= "&lt;div&gt;    </pre></td>
    </tr>
    <tr id="line-36"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-36">
      <td><pre>                           &lt;label&gt;&lt;b&gt;Concerned Department:&lt;/b&gt;&lt;/label&gt;&amp;nbsp;&lt;span&gt;".$concerned_department."&lt;/span&gt;    </pre></td>
    </tr>
    <tr id="line-37"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-37">
      <td><pre>                        &lt;/div&gt;";  </pre></td>
    </tr>
    <tr id="line-38"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-38">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-39"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-39">
      <td><pre>       </pre></td>
    </tr>
    <tr id="line-40"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-40">
      <td><pre>    if(isset($_POST['visitor_message'])) {  </pre></td>
    </tr>
    <tr id="line-41"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-41">
      <td><pre>        $visitor_message = htmlspecialchars($_POST['visitor_message']);  </pre></td>
    </tr>
    <tr id="line-42"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-42">
      <td><pre>        $email_body .= "&lt;div&gt;    </pre></td>
    </tr>
    <tr id="line-43"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-43">
      <td><pre>                           &lt;label&gt;&lt;b&gt;Visitor Message:&lt;/b&gt;&lt;/label&gt;    </pre></td>
    </tr>
    <tr id="line-44"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-44">
      <td><pre>                           &lt;div&gt;".$visitor_message."&lt;/div&gt;    </pre></td>
    </tr>
    <tr id="line-45"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-45">
      <td><pre>                        &lt;/div&gt;";  </pre></td>
    </tr>
    <tr id="line-46"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-46">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-47"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-47">
      <td><pre>       </pre></td>
    </tr>
    <tr id="line-48"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-48">
      <td><pre>    if($concerned_department == "billing") {  </pre></td>
    </tr>
    <tr id="line-49"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-49">
      <td><pre>        $recipient = "billing@domain.com";  </pre></td>
    </tr>
    <tr id="line-50"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-50">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-51"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-51">
      <td><pre>    else if($concerned_department == "marketing") {  </pre></td>
    </tr>
    <tr id="line-52"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-52">
      <td><pre>        $recipient = "marketing@domain.com";  </pre></td>
    </tr>
    <tr id="line-53"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-53">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-54"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-54">
      <td><pre>    else if($concerned_department == "technical support") {  </pre></td>
    </tr>
    <tr id="line-55"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-55">
      <td><pre>        $recipient = "antoescudero@gmail.com";  </pre></td>
    </tr>
    <tr id="line-56"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-56">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-57"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-57">
      <td><pre>    else {  </pre></td>
    </tr>
    <tr id="line-58"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-58">
      <td><pre>        $recipient = "antoescudero@gmail.com";  </pre></td>
    </tr>
    <tr id="line-59"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-59">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-60"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-60">
      <td><pre>       </pre></td>
    </tr>
    <tr id="line-61"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-61">
      <td><pre>    $email_body .= "&lt;/div&gt;";  </pre></td>
    </tr>
    <tr id="line-62"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-62">
      <td><pre></pre></td>
    </tr>
    <tr id="line-63"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-63">
      <td><pre>    $headers  = 'MIME-Version: 1.0' . "\r\n"  </pre></td>
    </tr>
    <tr id="line-64"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-64">
      <td><pre>    .'Content-type: text/html; charset=utf-8' . "\r\n"  </pre></td>
    </tr>
    <tr id="line-65"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-65">
      <td><pre>    .'From: ' . $visitor_email . "\r\n";  </pre></td>
    </tr>
    <tr id="line-66"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-66">
      <td><pre>       </pre></td>
    </tr>
    <tr id="line-67"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-67">
      <td><pre>    if(mail($recipient, $email_title, $email_body, $headers)) {  </pre></td>
    </tr>
    <tr id="line-68"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-68">
      <td><pre>        echo "&lt;p&gt;Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.&lt;/p&gt;";  </pre></td>
    </tr>
    <tr id="line-69"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-69">
      <td><pre>    } else {  </pre></td>
    </tr>
    <tr id="line-70"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-70">
      <td><pre>        echo '&lt;p&gt;We are sorry but the email did not go through.&lt;/p&gt;';  </pre></td>
    </tr>
    <tr id="line-71"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-71">
      <td><pre>    }  </pre></td>
    </tr>
    <tr id="line-72"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-72">
      <td><pre>       </pre></td>
    </tr>
    <tr id="line-73"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-73">
      <td><pre>} else {  </pre></td>
    </tr>
    <tr id="line-74"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-74">
      <td><pre>    echo '&lt;p&gt;Something went wrong&lt;/p&gt;';  </pre></td>
    </tr>
    <tr id="line-75"> </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr id="line-75">
      <td><pre>}  </pre></td>
    </tr>
    <tr id="line-76"> </tr>
  </tbody>
</table>
<pre>?&gt;  </pre>
</body>
</html>