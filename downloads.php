
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
      <div class="block">
        <div><h3>PythonSCAD Installers</h3></div>

		<div><br><br> If you prefer to compile it yourself, these are the required steps -
			<pre>
			git clone https://github.com/pythonscad/pythonscad.git
			cd pythonscad
			git submodule update --init --recursive
			sudo ./scripts/uni-get-dependencies.sh
			# make sure to get cryptopp and python dev packages installed, additionally
			mkdir build
			cd build
			cmake -DEXPERIMENTAL=1 -DENABLE_PYTHON=1 -DENABLE_LIBFIVE=1 ..
			make
			sudo make install
			</pre></div>
        <div><br><br>or go to the <a href="https://pythonscad.org/download.php">download pages</a> 
</div></div></html>
