<?php
 if(isset($_POST["description"])) {
 	$description=$_POST["description"];
 	$contact=$_POST["contact"];
 	$email=$_POST["email"];
 	print("Request sent");
}
?>
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
     
        <div>Motivation</div>
        <div>
            <p>
          		<a href="http://www.openscad.org">OpenSCAD</a> is a very cool tool that lets you express 3D models using its own language.
          		Unfortunately the language itself comes with a lot of intentional limitations.
        		</p>

        		<ul>
        		  <li>No mutation of variables (immutability, "single assignment of any variable")</li>
        		  <li>Limited number of iterations</li>
        		  <li>No file I/O</li>
        		</ul>

        		<p>These exist for the reason that they don't want the language
        		to be able to do bad things to people's computers, which allows the "script sharing culture" to
        		be safe.</p>

            <p>
        		Additionally the choice to use their own language brings with it a whole new mental model
        		that must be learned and mastered. This is a problem for wide adoption.
            </p>

            <p><strong>This fork lets you use Python inside of OpenSCAD as its native language </strong> </p> No extra external script to create OpenSCAD code. And as its based on openscad we aim to keep all the features which already exist in openscad. Only added features, no skipped ones ...

            <p>
              Before I continue I'd like to say I fully appreciate all the efforts the team and the Open Source community has contributed towards it over the years.
              The project is truly a work of love and has brought for many the joy of programming back into their lives.
              I believe the choice to have a safe script language is a good one.
            </p>

            <p>These limitations cause OpenSCAD programs to be written in the most convoluted ways,
            making them difficult to understand. While my goal to be able to use Python with OpenSCAD is
            actually completed, the problem that remains is getting it merged into mainline OpenSCAD.
            </p>

            <p>The argument is Python will introduce a massive security hole into the sharing culture.
	    So the proposed solution is to put the Python capability behind an option, which I have done.
	    Additionally OpenSCAD asks you, if you trust to a new Python Script and it will saves this decsion for you
	    in an SHA256 hash.
            Now I hope it's just a matter of time until things are merged.</p>

	    <p>This is where you come in. Use this fork, <a href="https://github.com/openscad/openscad/pull/4841">have your say</a>, and let's get it in!</p>
	    <p> A nice tutorial walking you through some exercises can be found <a href="tutorial/site/index.html">here </a>
	    <p> William F. Adams has created a nice wiki on that  <a href="http://old.reddit.com/r/openpythonscad/wiki/index">here </a>
	    <p> Python Stub files for all available functions in PythonSCAD can be found  <a href="https://raw.githubusercontent.com/pythonscad/pythonscad/refs/heads/master/libraries/python/openscad.pyi">here </a>


    <?php
      $server=gethostbyaddr($_SERVER["REMOTE_ADDR"]);
    ?>
  </main>
	</body>
</html>
