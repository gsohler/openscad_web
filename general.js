

var max_parallel=4;
var i;
var ajaxObject= new Array(max_parallel) ;
var ajax_avail = new Array(max_parallel);
for(i=0;i<max_parallel;i++)
{
	if(navigator.appName == "Microsoft Internet Explorer")
	{ ajaxObject[i] = new ActiveXObject("Microsoft.XMLHTTP"); }
	else { ajaxObject[i] = new XMLHttpRequest(); }
	ajax_avail[i]=1;
}

function ajaxLoad(url,destination,formid)
{
        var postdata=null;
        var method="get";
        if(formid != null)
        {
                var i=0;
                var f=document.getElementById(formid);
                var e;
                var enc="";
                for(i = 0; i < f.elements.length; i++)
                {
                        e = f.elements[i];
                        if((    e.type == 'checkbox' && e.checked) || (e.type == 'radio' && e.checked)
                                || e.type == 'text' || e.type == 'textarea' || e.type == 'hidden' || e.type == 'select-one'
                        )
                        enc     += encodeURIComponent(e.name).replace(/%20/g,'+') + '=' 
                                +  encodeURIComponent(e.value).replace(/%20/g, '+') + '&';
                }
                enc=enc.substr(0, enc.length - 1);
                if(f.method == "get") { url=url+"?"+enc; }
                if(f.method == "post") { postdata=enc; }
                method=f.method;

        }

	var i;
	var id=-1;
	for(i=0;i<max_parallel;i++)
	{
		if(id == -1 && ajax_avail[i] ==  1)
		{
			id=i;
		}
	}
	
	if(id != -1)
	{
		ajax_avail[id]=0;
       		ajaxObject[id].open(method, url,true);
        	ajaxObject[id].setRequestHeader('Content-type','application/x-www-form-urlencoded;');
        	ajaxObject[id].setRequestHeader("Pragma", "no-cache"); 
        	ajaxObject[id].setRequestHeader("Cache-Control", "no-cache, no-store, must-revalidate");
        	ajaxObject[id].setRequestHeader("If-Modified-Since", document.lastModified);
		ajaxObject[id].onreadystatechange=function(){
			if(this.readyState == 4) {
				if(document.getElementById(destination) != null) {
					document.getElementById(destination).innerHTML = 
					this.responseText;
				}
				ajax_avail[id]=1;
			}
		};
        	ajaxObject[id].send(postdata);
        }

}






function ajaxLoadCompleter(url,destination,formid,clearid)
{
	document.getElementById(clearid).innerHTML="&nbsp;";
	ajaxLoad(url,destination,formid);
}

