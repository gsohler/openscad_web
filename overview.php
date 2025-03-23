
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
     
        
        <div><h3>Get started</h3>
        
          <p>
            If you're new to the concept of "code CAD", please first <a href="https://learn.cadhub.xyz/blog/curated-code-cad/">read this short introduction</a> and
            browse the plethora of already existing solutions to this problem space.
          </p>
          <p>
            Before downloading, please understand that "Python | OpenSCAD" is a fork currently maintained by myself, gsohler.<br>
            I sincerely wish for this fork/branch to be merged into mainline OpenSCAD and I have been working towards
            making it happen. <a href="https://github.com/openscad/openscad/pull/4841"><p>You can follow the progress here</p></a>.
          </p>

          <p>
            There are several benefits to using Python over OpenSCAD's DSL (domain specific language):
          </p>
          <ol>
            <li>Faster general computation due to faster interpreter</li>
            <li>Utilize any pip packages</li>
            <li>More familiar syntax</li>
            <li>More familiar computation model</li>
          </ol>
          <p>
            Hopefully these benefits will help draw more people to the wonderful world of PythonSCAD!
          </p>
          <p>
	    Ok, now it's probably a good idea to <a href="downloads.php">download</a> it.

          </div>
  </main>
	</body>
</html>
