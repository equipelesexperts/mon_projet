//v.3.6 build 131108

/*
Copyright DHTMLX LTD. http://www.dhtmlx.com
To use this component please contact sales@dhtmlx.com to obtain license
*/
/**
*   @desc: load grid from CSV file
*   @param: path - path to file
*   @param: afterCall - function which will be called after xml loading
*   @type: public
*     @edition: Professional
*   @topic: 0
*/
dhtmlXGridObject.prototype.loadCSVFile = function(path,afterCall){
    this.load(path,afterCall,"csv")
}

/**
*   @desc: enable mode, where ID for rows loaded from CSV autogenerated
*   @param: mode - true/false
*   @type: public
*   @edition: Professional
*   @topic: 0
*/
dhtmlXGridObject.prototype.enableCSVAutoID = function(mode){
   this._csvAID=convertStringToBoolean(mode);
}
/**
*   @desc: enable recognizing first row in CSV as header
*   @param: mode - true/false
*   @type: public
*   @edition: Professional
*   @topic: 0
*/
dhtmlXGridObject.prototype.enableCSVHeader = function(mode){
   this._csvHdr=convertStringToBoolean(mode);
}

/**
*   @desc: load grid from CSV string
*   @param: str - delimer used in CSV operations, comma by default ( only single char delimeters allowed )
*   @type: public
*     @edition: Professional
*   @topic: 0
*/
dhtmlXGridObject.prototype.setCSVDelimiter = function(str){
   this.csv.cell=str;
}
dhtmlXGridObject.prototype._csvAID = true;

/**
*   @desc: load grid from CSV string
*   @param: str - CSV  string
*   @type: public
*     @edition: Professional
*   @topic: 0
*/
dhtmlXGridObject.prototype.loadCSVString = function(str){
   this.parse(str,"csv")
}

/**
*   @desc: serialize to CSV string
*   @type: public
*	@param: text only - force serialization of text values ( skip HTML elements ) )
*     @edition: Professional
*   @topic: 0
*/
dhtmlXGridObject.prototype.serializeToCSV = function(textmode){ 
    this.editStop()
    if (this._mathSerialization)
         this._agetm="getMathValue";
    else if (this._strictText || textmode)
    	this._agetm="getTitle";
    else this._agetm="getValue";

	var out=[];
	if (this._csvHdr){
		for (var j=1; j < this.hdr.rows.length; j++) {
			var a=[]; 
			for (var i=0; i<this._cCount; i++)
				if ((!this._srClmn)||(this._srClmn[i]))
					a.push(this.getColumnLabel(i,j-1));
    		out.push(this.csvParser.str(a,this.csv.cell, this.csv.row));
    	}
    }

    
    //rows collection
    var i=0;
    var leni=this.rowsBuffer.length;

   for(i; i<leni; i++){
		var temp=this._serializeRowToCVS(null,i)      	
		if (temp!="") out.push(temp);
  }

   return this.csvParser.block(out,this.csv.row);
}

/**
*   @desc: serialize TR to CSV
*   @param: r - TR or xml node (row)
*   @retruns: string - CSV representation of passed row
*   @type: private
*/
dhtmlXGridObject.prototype._serializeRowToCVS = function(r,i,start,end){
    var out = new Array();
    if (!r){
	    r=this.render_row(i)
	    if (this._fake && !this._fake.rowsAr[r.idd]) this._fake.render_row(i);
	}
    

    if (!this._csvAID)
       out[out.length]=r.idd;

	start = start||0;
	
    end = end||this._cCount;
    //cells
    var changeFl=false;
    var ind=start;
    //rowspans before block selection
    while (r.childNodes[start]._cellIndex>ind && start) start--; 
    
    
    for(var jj=start;ind<end;jj++){
    	if (!r.childNodes[jj]) break;
    	var real_ind=r.childNodes[jj]._cellIndex;
        if (((!this._srClmn)||(this._srClmn[real_ind])) && (!this._serialize_visible || !this._hrrar[real_ind])){
            var cvx=r.childNodes[jj];

            var zx=this.cells(r.idd,real_ind);
            while (ind!=real_ind){
            	ind++;
            	out.push("")
            	if (ind>=end) break;
            }
            if (ind>=end) break;
            ind++;
        /*	if (zx.getText)
        		zxVal=zx.getText();
        	else*/
            if (zx.cell)
				zxVal=zx[this._agetm]();
			else zxVal="";


		if ((this._chAttr)&&(zx.wasChanged()))
			changeFl=true;

            out[out.length]=((zxVal===null)?"":zxVal)
//#colspan:20092006{
            if ( this._ecspn && cvx.colSpan && cvx.colSpan >1 ){
                cvx=cvx.colSpan-1;
                for (var u=0; u<cvx; u++){
	                out[out.length] = "";
	                ind++;
                }
            }
//#}

 } else ind++;
    }
     if ((this._onlChAttr)&&(!changeFl)) return "";
      return this.csvParser.str(out,this.csv.cell, this.csv.row);
}

dhtmlXGridObject.prototype.toClipBoard=function(val){
    if (window.clipboardData)
      window.clipboardData.setData("Text",val);
   else
      (new Clipboard()).copy(val);

}
dhtmlXGridObject.prototype.fromClipBoard=function(){
   if (window.clipboardData)
      return window.clipboardData.getData("Text");
   else
      return (new Clipboard()).paste();
}

/**
*   @desc: copy value of cell to clipboard
*   @type: public
*   @param: rowId - id of row (optional, use selected row by default)
*   @param: cellInd - column index(optional, use selected cell by default)
*     @edition: Professional
*   @topic: 5
*/
dhtmlXGridObject.prototype.cellToClipboard = function(rowId,cellInd){
    if ((!rowId)||(!cellInd)){
       if (!this.selectedRows[0]) return;
       rowId=this.selectedRows[0].idd;
       cellInd=this.cell._cellIndex;
   }
   
   	var ed=this.cells(rowId,cellInd);
    this.toClipBoard(((ed.getLabel?ed.getLabel():ed.getValue())||"").toString());
}

/**
*   @desc: set value of cell from clipboard
*   @type: public
*     @edition: Professional
*   @param: rowId - id of row (optional, use selected row by default)
*   @param: cellInd - column index(optional, use selected cell by default)
*   @topic: 5
*/
dhtmlXGridObject.prototype.updateCellFromClipboard = function(rowId,cellInd){
    if ((!rowId)||(!cellInd)){
       if (!this.selectedRows[0]) return;
       rowId=this.selectedRows[0].idd;
       cellInd=this.cell._cellIndex;
   }
   	var ed=this.cells(rowId,cellInd);
    ed[ed.setImage?"setLabel":"setValue"](this.fromClipBoard());
}

/**
*   @desc: copy value of row to clipboard
*   @type: public
*     @edition: Professional
*   @param: rowId - id of row (optional, use selected row by default)
*   @topic: 5
*/
dhtmlXGridObject.prototype.rowToClipboard = function(rowId){
	var out="";
	if (this._mathSerialization)
		this._agetm="getMathValue";
	else if (this._strictText)
		this._agetm="getTitle";
	else 
		this._agetm="getValue";
    
	if (rowId)
		out=this._serializeRowToCVS(this.getRowById(rowId));
	else {
   		var data = [];
		for (var i=0; i<this.selectedRows.length; i++){
			data[data.length] = this._serializeRowToCVS(this.selectedRows[i]);
			out = this.csvParser.block(data, this.csv.row);
		}
	}
	this.toClipBoard(out);
}

/**
*   @desc: set value of row from clipboard
*   @type: public
*     @edition: Professional
*   @param: rowId - id of row (optional, use selected row by default)
*   @topic: 5
*/
dhtmlXGridObject.prototype.updateRowFromClipboard = function(rowId){
	var csv=this.fromClipBoard();
	if (!csv) return;
	if (rowId)
		var r=this.getRowById(rowId);
	else
		var r=this.selectedRows[0];
	if (!r) return;
	
	var parser = this.csvParser;
	csv=parser.unblock(csv,this.csv.cell, this.csv.row)[0];
	if (!this._csvAID) csv.splice(0,1);
	for (var i=0; i<csv.length; i++){
		var ed=this.cells3(r,i);
		ed[ed.setImage?"setLabel":"setValue"](csv[i]);
	}
}

dhtmlXGridObject.prototype.csvParser={
	block:function(data,row){
		return data.join(row);
	},
	unblock:function(str,cell,row){
		var data = (str||"").split(row);	
		for (var i=0; i < data.length; i++)
			data[i]=(data[i]||"").split(cell);
    var last = data.length-1;
    if (data[last].length == 1 && data[last][0]=="")
      data.splice(last,1);
		return data;
	},
	str:function(data,cell,row){
		return data.join(cell);
	}
};
dhtmlXGridObject.prototype.csvExtParser={
	_quote:RegExp('"',"g"),
	_quote_esc:RegExp("\\\\\"","g"),
	block:function(data,row){
		return data.join(row);
	},
	unblock:function(str,cell,row){ 
		var out = [[]];
		var ind = 0;
		if (!str) return out;

		var quote_start = /^[ ]*"/;
		var quote_end   = /"[ ]*$/;
		var row_exp  = new RegExp(".*"+row+".*$");
		
		var data = str.split(cell);
		for (var i=0; i<data.length; i++){
			if (data[i].match(quote_start)){
				var buff = data[i].replace(quote_start, "");
				while (!data[i].match(quote_end)) {
					i++;
					buff+=data[i];
				}
				out[ind].push(buff.replace(quote_end, "").replace(this._quote_esc,'"'));
			} else if (data[i].match(row_exp)){
        var row_pos = data[i].indexOf(row);
				out[ind].push(data[i].substr(0, row_pos));
				ind++;
				out[ind] = [];
				data[i]=data[i].substr(row_pos+1); i--;
			} else {
				if (data[i] || i!=data.length-1)
					out[ind].push(data[i]);
			}
		}

    var last = out.length-1;
    if (last>0 && !out[last].length)
      out.splice(last,1);
    
		return out;	
	},
	str:function(data,cell,row){
		for (var i=0; i < data.length; i++)
			data[i] = '"'+data[i].replace(this._quote, "\\\"")+'"';
		return data.join(cell);
	}
};

/**
*   @desc: add new row from clipboard
*   @type: public
*     @edition: Professional
*   @topic: 5
*/
dhtmlXGridObject.prototype.addRowFromClipboard = function(){
   var csv=this.fromClipBoard();
   if (!csv) return;
   var z=this.csvParser.unblock(csv, this.csv.cell, this.csv.row);
   for (var i=0; i<z.length; i++)
      if (z[i]){
         csv=z[i];
         if (!csv.length) continue;
         if (this._csvAID)
         	this.addRow(this.getRowsNum()+2,csv);
         else{
         	if (this.rowsAr[csv[0]])
         		csv[0]=this.uid();
         	this.addRow(csv[0],csv.slice(1));
     		}
      }
}

/**
*   @desc: copy grid in CSV to clipboard
*   @type: public
*     @edition: Professional
*   @topic: 5
*/
dhtmlXGridObject.prototype.gridToClipboard = function(){
   this.toClipBoard(this.serializeToCSV());
}

/**
*   @desc: init grid from CSV stored in clipboard
*   @type: public
*     @edition: Professional
*   @topic: 5
*/
dhtmlXGridObject.prototype.gridFromClipboard = function(){
   var csv=this.fromClipBoard();
   if (!csv) return;
   this.loadCSVString(csv);
}

/**
*   @desc: get grid as XML - php required
*   @param: path - path to server side code,optional
*   @type: private
*   @edition: Professional
*   @topic: 5
*/
dhtmlXGridObject.prototype.getXLS = function(path){
   if (!this.xslform){
      this.xslform=document.createElement("FORM");
      this.xslform.action=(path||"")+"xls.php";
      this.xslform.method="post";
      this.xslform.target=(_isIE?"_blank":"");
      document.body.appendChild(this.xslform);
      var i1=document.createElement("INPUT");
      i1.type="hidden";
      i1.name="csv";
      this.xslform.appendChild(i1);
      var i2=document.createElement("INPUT");
      i2.type="hidden";
      i2.name="csv_header";
      this.xslform.appendChild(i2);
   }
      var cvs = this.serializeToCSV();
      this.xslform.childNodes[0].value = cvs;
        var cvs_header = [];
        var l = this._cCount;
        for (var i=0; i<l; i++) {
         cvs_header.push(this.getHeaderCol(i));
        }
      cvs_header = cvs_header.join(',');
      this.xslform.childNodes[1].value = cvs_header;
       this.xslform.submit();
}

/**
*   @desc: generate print friendly view
*   @type: public
*   @edition: Professional
*   @topic: 5
*/
dhtmlXGridObject.prototype.printView = function(before,after){
	  var html="<style>TD { font-family:Arial; text-align:center; padding-left:2px;padding-right:2px; } \n td.filter input, td.filter select { display:none; }	\n  </style>";
	  var st_hr=null;
	  if (this._fake) {
	  	st_hr=[].concat(this._hrrar); 
	  	for (var i=0; i<this._fake._cCount; i++)
	  		this._hrrar[i]=null;
	  }
	   html+="<base  href='"+document.location.href+"'></base>";
	   if (!this.parentGrid) html+=(before||"");
       html += '<table width="100%" border="2px" cellpadding="0" cellspacing="0">';
       var row_length = Math.max(this.rowsBuffer.length,this.rowsCol.length); //paging and smartrendering
       var col_length = this._cCount;
      var width = this._printWidth();
      html += '<tr class="header_row_1">';
        for (var i=0; i<col_length; i++){
        	if (this._hrrar && this._hrrar[i]) continue;
         var hcell=this.hdr.rows[1].cells[this.hdr.rows[1]._childIndexes?this.hdr.rows[1]._childIndexes[parseInt(i)]:i];
         var colspan=(hcell.colSpan||1);
         var rowspan=(hcell.rowSpan||1);
         
         for (var j=1; j<colspan; j++)
         	width[i]+=width[j];
    	html += '<td rowspan="'+rowspan+'" width="'+width[i]+'%" style="background-color:lightgrey;" colspan="'+colspan+'">'+this.getHeaderCol(i)+'</td>';
         i+=colspan-1;
        }
      html += '</tr>';

	  	for (var i=2; i<this.hdr.rows.length; i++){
	  		if (_isIE){
	  			html+="<tr style='background-color:lightgrey' class='header_row_"+i+"'>";
	  			var cells=this.hdr.rows[i].childNodes;
	  			for (var j=0; j < cells.length; j++) 
	  				if (!this._hrrar || !this._hrrar[cells[j]._cellIndex]){
	  					html+=cells[j].outerHTML;
	  				}
	  			html+="</tr>";
	  			}
	  		else
				html+="<tr class='header_row_"+i+"' style='background-color:lightgrey'>"+(this._fake?this._fake.hdr.rows[i].innerHTML:"")+this.hdr.rows[i].innerHTML+"</tr>";
		}

       for (var i=0; i<row_length; i++) {
         html += '<tr>';
           if (this.rowsCol[i] && this.rowsCol[i]._cntr){
           	  html+=this.rowsCol[i].innerHTML.replace(/<img[^>]*>/gi,"")+'</tr>';
           	  continue;
           }
           if (this.rowsCol[i] && this.rowsCol[i].style.display=="none") continue;
           
           var row_id
           if (this.rowsCol[i])
           		row_id=this.rowsCol[i].idd;
           	else if (this.rowsBuffer[i]) 
           		row_id=this.rowsBuffer[i].idd;
           	else continue; //dyn loading 
           	
           for (var j=0; j<col_length; j++) {
           	   if (this._hrrar && this._hrrar[j]) continue;
           	   if(this.rowsAr[row_id] && this.rowsAr[row_id].tagName=="TR") {
	           	   var c=this.cells(row_id, j);
	           	   if (c._setState) var value="";
	           	   else if (c.getContent) value = c.getContent();
	           	   else if (c.getImage || c.combo) var value=c.cell.innerHTML;
	           	   else var value = c.getValue();
           	   } else 
	           	  var value=this._get_cell_value(this.rowsBuffer[i],j);
               var color = this.columnColor[j]?'background-color:'+this.columnColor[j]+';':'';
            var align = this.cellAlign[j]?'text-align:'+this.cellAlign[j]+';':'';
            var cspan =  c.getAttribute("colspan");
            html += '<td style="'+color+align+'" '+(cspan?'colSpan="'+cspan+'"':'')+'>'+(value===""?"&nbsp;":value)+'</td>';
            if (cspan) j+=cspan-1;
           }
         html += '</tr>';
         if (this.rowsCol[i] && this.rowsCol[i]._expanded){
         	 var sub=this.cells4(this.rowsCol[i]._expanded.ctrl);
         	 if (sub.getSubGrid)
         	 	html += '<tr><td colspan="'+col_length+'">'+sub.getSubGrid().printView()+'</td></tr>';
         	 else
         	 	html += '<tr><td colspan="'+col_length+'">'+this.rowsCol[i]._expanded.innerHTML+'</td></tr>';
         }
       }

	   if (this.ftr)
	  	for (var i=1; i<this.ftr.childNodes[0].rows.length; i++)
	  		html+="<tr style='background-color:lightgrey'>"+((this._fake)?this._fake.ftr.childNodes[0].rows[i].innerHTML:"")+this.ftr.childNodes[0].rows[i].innerHTML+"</tr>";
        		

      html += '</table>';
      if (this.parentGrid) return html;
      
      html+=(after||"");
      var d = window.open('', '_blank');
      d.document.write(html);
      d.document.write("<script>window.onerror=function(){return true;}</script>");
      d.document.close();
      if (this._fake) {
	  	this._hrrar=st_hr;
	  }
}
dhtmlXGridObject.prototype._printWidth=function(){
      var width = [];
      var total_width = 0;
      for (var i=0; i<this._cCount; i++) {
         var w = this.getColWidth(i);
         width.push(w);
         total_width += w;
      }
      var percent_width = [];
      var total_percent_width = 0;
      for (var i=0; i<width.length; i++) {
         var p = Math.floor((width[i]/total_width)*100);
         total_percent_width += p;
            percent_width.push(p);
      }
      percent_width[percent_width.length-1] += 100-total_percent_width;
      return percent_width;
   }
/**
*   @desc: load grid from javascript object
*   @param: obj - object
*   @type: notImplemented
*   @topic: 0
*/
dhtmlXGridObject.prototype.loadObject = function(obj){
}


/**
*   @desc: load grid from JSON file
*   @param: path - path to file
*   @type: notImplemented
*   @topic: 0
*/
dhtmlXGridObject.prototype.loadJSONFile = function(path){
}


/**
*   @desc: serialize to JSON object
*   @type: notImplemented
*   @topic: 0
*/
dhtmlXGridObject.prototype.serializeToObject = function(){
}

/**
*   @desc: serialize to JSON string
*   @type: notImplemented
*   @topic: 0
*/
dhtmlXGridObject.prototype.serializeToJSON = function(){
}

/*
user_pref("signed.applets.codebase_principal_support", true);
*/
if (!window.clipboardData)
window.clipboardData={
	_make:function(){
	   
	   var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
	   if (!clip) return null;
		
	   var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
	   if (!trans) return null;
	   		
	   trans.addDataFlavor('text/unicode');


	   var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
	   		
	   this._p=[clip,trans,str];
	   		
	   return true;
	},
	setData:function(type,text){
		try{
		netscape.security.PrivilegeManager.enablePrivilege('UniversalXPConnect');
		} catch(e){ dhtmlxError.throwError("Clipboard","Access to clipboard denied",[type,text]); return ""; }
		if (!this._make()) return false;
		
   this._p[2].data=text;
   this._p[1].setTransferData("text/unicode",this._p[2],text.length*2);
   var clipid=Components.interfaces.nsIClipboard;
   this._p[0].setData(this._p[1],null,clipid.kGlobalClipboard);

	},
	getData:function(type){ 
		try{
		netscape.security.PrivilegeManager.enablePrivilege('UniversalXPConnect');		
		} catch(e){ dhtmlxError.throwError("Clipboard","Access to clipboard denied",[type]); return ""; }
		if (!this._make()) return false;


   this._p[0].getData(this._p[1],this._p[0].kGlobalClipboard);
   var strLength = new Object();
   var str = new Object();
   try{
   	this._p[1].getTransferData("text/unicode",str,strLength);
   } catch(e){
   	//empty clipboard in FF 
   	return "";
   }

	if (str) str = str.value.QueryInterface(Components.interfaces.nsISupportsString);
	if (str) return str.data.substring(0,strLength.value / 2);

	return "";

	}
}
//(c)dhtmlx ltd. www.dhtmlx.com

