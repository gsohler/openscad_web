
<html>

<iframe id="headerFrame" src="header.php" width="100%" frameborder="0" scrolling="no"></iframe>

<script>
  function resizeIframe() {
    const iframe = document.getElementById('headerFrame');
    iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
  }

  document.getElementById('headerFrame').onload = resizeIframe;
</script>

<div style="text-align:right"> 

  <a href="index.php">Introduction </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="overview.php">Overview </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="downloads.php">Downloads </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="tutorial.php">Tutorial </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="examples.php">Examples </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="references.php">References</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="future.php">Future </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="contacts.php">Contacts </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
</div>

    <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
     
        <div><h3>Various references</h3>
          <br>
        
            <p>
          		

            

	    <p>Link to github fork, <a href="https://github.com/openscad/openscad/pull/4841">comments welcome</a></p>
	    <p> A nice tutorial walking you through some exercises can be found <a href="tutorial/site/index.php">here </a>
	    <p> William F. Adams has created a nice wiki on that  <a href="http://old.reddit.com/r/openpythonscad/wiki/index">here </a>
	    <p> Python Stub files for all available functions in PythonSCAD can be found  <a href="https://raw.githubusercontent.com/pythonscad/pythonscad/refs/heads/master/libraries/python/openscad.pyi">here </a>


           <p> If you're new to "code CAD", please first <a href="https://learn.cadhub.xyz/blog/curated-code-cad/">read this short introduction</a> and
            browse the plethora of already existing solutions to this problem space.<br>
          </p>
          

          <p>
	    here are the <a href="downloads.php">downloads</a><br><br>

		Python-Openscad related discussion is on our <a href="http://web.libera.chat/?channel=#pyopenscad">IRC</a> Channel.<br><br>
		A Forum to raise questions is available at <a href="http://reddit.com/r/openpythonscad"> Reddit </a> <br><br>
    Designs, which pythonscad community have shared are <a href="https://pythonscad.org/share_design.php"> here </a><br><br><br>
    For those which want to contribute in a mailing list,  write an empty mail message to 'pythonscad+subscribe@googlemain.com'  </a> <br> <br> <br>
		If you have comments, criticism or even improvement suggestions, don't hesitate to write to me at guenther.sohler@gmail.com<br><br>
    
	</body>
</html>
