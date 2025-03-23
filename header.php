
<html>
	<head>
  	<title>Python | OpenSCAD</title>
    <meta name="description" content="Work more quickly with OpenSCAD, using Python.">
    
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      header {
        padding-top: 0cqb
        padding-bottom: 1cm;
        font-size: 3em;
        text-align: center;
        font-family: 'Play', sans-serif;
        font-weight: 400;
        background-color: rgb(43, 91, 132);
        color: white;
        border-bottom: 1px solid rgb(68, 68, 68);
      }

      main {
        font-family: 'Source Sans 3', sans-serif;
        font-weight: 400;
        font-size: 16px;
        margin: 1cm 1cm;
      }

      pre {
        overflow-x: scroll;
        overflow-y: hidden;
      }

      .code {
        font-size: 14px;
      }

      .equation {
        display: flex;
        gap: 0.5em;
        align-items: center;
        justify-content: center;
      }

      header p {
        font-size: 0.5em;
      }

      .block {
        border-top: 4px solid #75a8d3;
        padding-bottom: 1cm;
        width: calc(50% - 0.5cm);
      }

      @media(max-width: 720px) {
        .block {
          width: 100%;
        }
      }

      @media(min-width: 1280px) {
        .block {
          width: calc(33% - 0.5cm);
        }
      }

      .features {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .features .micro-block {
        width: calc(100% - 0.5cm);
      }

      @media(max-width: 720px) {
        .features .micro-block {
          width: 100%;
        }
      }

      @media(min-width: 1280px) {
        .additional-features {
          width: 100%;
        }
        .features .micro-block {
          width: calc(50% - 0.5cm);
        }
      }

      .block > div:nth-of-type(1) {
        padding-top: 0.5em;
        font-size: 1.5em;
      }

      .micro-block {
        border-top: 2px solid #75a8d3;
        margin-top: 0.5em;
        padding-bottom: 0.5cm;
      }

      .micro-block > div:nth-of-type(1) {
        padding-top: 0.5em;
        font-size: 1em;
      }
    </style>
  </head>
	<body>
    <header>
      <div class="equation">
    		<img src="pictures/logo_python.png" height=60/>
    		<span>+</span>
    		<img src="pictures/logo_openscad.png" height=60/>
    		<span>=</span>
    		<img src="pictures/plogo.PNG" height=60/>
  		  <div>Python | OpenSCAD</div><p></p>
      <p style="margin: 1cm;">Leverage one of the world's most popular programming languages to express parametric 3D models.
      </header>
   
  
 