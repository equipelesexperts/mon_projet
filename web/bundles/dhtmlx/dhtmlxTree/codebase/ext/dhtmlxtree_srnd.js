//v.3.6 build 131108

/*
Copyright DHTMLX LTD. http://www.dhtmlx.com
To use this component please contact sales@dhtmlx.com to obtain license
*/
dhtmlXTreeObject.prototype.enableSmartRendering=function(){this.enableSmartXMLParsing(!0);this._srnd=!0;this.itemHeight=18;var b=this;this.allTree.onscroll=function(){if(!b._srndT)b._srndT=window.setTimeout(function(){b._srndT=null;b._renderState()},300)};this.attachEvent("onXLE",function(){b._renderState()});this._singleTimeSRND()};
dhtmlXTreeObject.prototype._renderState=function(){this._idpull[this.rootId]._sready||this.prepareSR(this.rootId,!0);var b=this.allTree.scrollTop,a=Math.floor(b/this.itemHeight),f=Math.ceil(this.allTree.offsetHeight/this.itemHeight);this._group_render=!0;this._getItemByPos(b,this.itemHeight,f,null,!1,this._renderItemSRND);this._group_render=!1};
dhtmlXTreeObject.prototype._renderItemSRND=function(b,a){if(!b.span){b.span=-1;for(var f=b.parentObject.htmlNode.childNodes[0].childNodes,c=a*this.itemHeight,d=null,e=1;e<f.length;e++){var d=f[e],g=d.nodem?this.itemHeight:d.offsetHeight||parseInt(d.childNodes[1].firstChild.style.height);c-=g;if(c<0)if(c==-1)c++;else{var h=d.childNodes[1].firstChild;h.style.height=parseInt(h.style.height)-(g-Math.abs(c)+this.itemHeight)+"px";if(Math.abs(c)!=g){var i=this._drawNewHolder(c+g,!0);d.parentNode.insertBefore(i,
d)}d.tr={nextSibling:d};break}}if(h&&h.style.height!="0px"&&!d.offsetHeight){var j=this._hAdI;this._hAdI=!0}this._parseItem(b._sxml,b.parentObject,null,d);if(h&&h.style.height!="0px"&&!d.offsetHeight)this._hAdI=j;b.unParsed&&this._correctPlus(b);h&&h.style.height=="0px"&&d.parentNode.removeChild(d)}};
dhtmlXTreeObject.prototype._buildSRND=function(b,a){b.parentObject&&this._globalIdStorageFind(b.parentObject.id);this._idpull[this.rootId]._sready||this.prepareSR(this.rootId,!0);this._renderItemSRND(b,this._getIndex(b));b.unParsed&&!a&&this.reParse(b,0);b.prepareSR||this.prepareSR(b.id)};dhtmlXTreeObject.prototype._getIndex=function(b){for(var a=0;a<b.parentObject.childsCount;a++)if(b.parentObject.childNodes[a]==b)return a};
dhtmlXTreeObject.prototype.prepareSR=function(b,a){b=this._idpull[b];if(!b._sready){var f=this._drawNewHolder(this.itemHeight*b.childsCount,a);b.htmlNode.childNodes[0].appendChild(f);b._sready=!0}};
dhtmlXTreeObject.prototype._drawNewHolder=function(b,a){var f=document.createElement("TR"),c=document.createElement("TD"),d=document.createElement("TD"),e=document.createElement("DIV");e.innerHTML="&nbsp;";c.appendChild(e);f.appendChild(d);f.appendChild(c);if(!a)f.style.display="none";e.style.height=b+"px";return f};
dhtmlXTreeObject.prototype._getNextNodeSR=function(b,a){return!a&&b.childsCount?b.childNodes[0]:b==this.htmlNode?-1:b.tr&&b.tr.nextSibling&&b.tr.nextSibling.nodem?b.tr.nextSibling.nodem:this._getNextNode(b.parentObject,!0)};
dhtmlXTreeObject.prototype._getItemByPos=function(b,a,f,c,d,e){if(!c)this._pos_c=b,c=this._idpull[this.rootId];for(var g=0;g<c.childsCount;g++){this._pos_c-=a;this._pos_c<=0&&(d=!0);d&&(e.apply(this,[c.childNodes[g],g]),f--);if(f<0)break;if(c.childNodes[g]._open&&(f=this._getItemByPos(null,a,f,c.childNodes[g],d,e),f<0))break}return f};
dhtmlXTreeObject.prototype._addItemSRND=function(b,a,f){var c=this._idpull[b],d=c.childsCount,e=c.childNodes;e[d]=new dhtmlXTreeItemObject(a,"",c,this,null,1);itemId=e[d].id;e[d]._sxml=f.clone();c.childsCount++};
dhtmlXTreeObject.prototype._singleTimeSRND=function(){this._redrawFrom=function(){};var b=dhtmlXTreeItemObject;this._singleTimeSRND=function(){};window.dhtmlXTreeItemObject=function(a,f,c,d,e,g){if(!d._srnd)return b.call(this,a,f,c,d,e,g);this.scolor=this.acolor=this.htmlNode="";this.span=this.dragMove=this.dragSpan=this.tempDOMU=this.tempDOMM=this.childsCount=this.tr=0;this.closeble=1;this.childNodes=[];this.userData=new cObject;this.checkstate=0;this.treeNod=d;this.label=f;this.parentObject=c;this.actionHandler=
e;this.images=[d.imageArray[0],d.imageArray[1],d.imageArray[2]];this.id=d._globalIdStorageAdd(a,this);if(a==d.rootId)this.htmlNode=this.treeNod.checkBoxOff?this.treeNod._createItem(1,this,g):this.treeNod._createItem(0,this,g),this.htmlNode.objBelong=this;return this};this.setCheckSR=this.setCheck;this.setCheck=function(a,b){this._globalIdStorageFind(a);return this.setCheckSR(a,b)};this._get_srnd_p=function(a){for(var b=[];a!=this.rootId;){for(var c=this.getParentId(a),d=0;d<this._idpull[c].childsCount;d++)if(this._idpull[c].childNodes[d].id==
a){b.push([c,d]);break}a=c}b.reverse();return b};this._get_srnd_p_last=function(a,b,c){for(var b=b||[],d=0;;){var e=this._idpull[a];e._sxml&&this.findStrInXML(e._sxml.d,"text",c)&&this._globalIdStorageFind(e.id);d=e.childsCount;if(!d)break;b.push([a,d-1]);a=e.childNodes[d-1].id}return b};this._get_prev_srnd=function(a,b){var c;if(!a.length)return a.push.apply(a,this._get_srnd_p_last(this.rootId,null,b)),c=a[a.length-1],this._idpull[c[0]].childNodes[c[1]];c=a[a.length-1];if(c[1]){c[1]--;var d=this._idpull[c[0]].childNodes[c[1]];
this._get_srnd_p_last(d.id,a,b)}else if(a.pop(),!a.length)return this._get_prev_srnd(a,b);c=a[a.length-1];return this._idpull[c[0]].childNodes[c[1]]};this._get_next_srnd=function(a,b){if(!a.length)return a.push([this.rootId,0]),this._idpull[this.rootId].childNodes[0];var c=a[a.length-1],d=this._idpull[c[0]].childNodes[c[1]];if(d.childsCount&&!b)return a.push([d.id,0]),d.childNodes[0];c[1]++;if(d=this._idpull[c[0]].childNodes[c[1]])return d;a.pop();return!a.length?this.htmlNode:this._get_next_srnd(a,
!0)};this._findNodeByLabel=function(a,b,c){a=a.replace(/^( )+/,"").replace(/( )+$/,"");a=RegExp(a.replace(/([\*\+\\\[\]\(\)]{1})/gi,"\\$1").replace(/ /gi,".*"),"gi");if(!c&&(c=this._selected[0],!c))c=this.htmlNode;for(var d=c,e=this._get_srnd_p(d.id);c=b?this._get_prev_srnd(e,a):this._get_next_srnd(e);){if(c.label){if(c.label.search(a)!=-1)return c}else if(c._sxml){if(c._sxml.get("text").search(a)!=-1)return c;this.findStrInXML(c._sxml.d,"text",a)&&this._globalIdStorageFind(c.id)}c.unParsed&&this.findStrInXML(c.unParsed.d,
"text",a)&&this.reParse(c);if(d.id==c.id)break;if(b&&e.length==1&&e[0][1]==0)break}return null};this.deleteChildItems=function(a){if(this.rootId==a&&(this._selected=[],this._idpull={},this._p=this._pos_c=this._pullSize=null,this.allTree.removeChild(this.htmlNode.htmlNode),this.htmlNode=new dhtmlXTreeItemObject(this.rootId,"",0,this),this.htmlNode.htmlNode.childNodes[0].childNodes[0].style.display="none",this.htmlNode.htmlNode.childNodes[0].childNodes[0].childNodes[0].className="hiddenRow",this.allTree.insertBefore(this.htmlNode.htmlNode,
this.selectionBar),_isFF))this.allTree.childNodes[0].width="100%",this.allTree.childNodes[0].style.overflow="hidden"};this._HideShow=function(a,b){if(this.XMLsource&&!a.XMLload){if(b!=1)a.XMLload=1,this._loadDynXML(a.id)}else if(a.span||this._buildSRND(a),a.unParsed&&(this.reParse(a),this.prepareSR(a.id)),a.childsCount!=0){var c=a.htmlNode.childNodes[0].childNodes,d=c.length;if(d>1){if((c[1].style.display!="none"||b==1)&&b!=2){this.allTree.childNodes[0].border="1";this.allTree.childNodes[0].border=
"0";var e="none";a._open=!1}else e="",a._open=!0;for(var g=1;g<d;g++)c[g].style.display=e;this._renderState()}this._correctPlus(a)}}};

//v.3.6 build 131108

/*
Copyright DHTMLX LTD. http://www.dhtmlx.com
To use this component please contact sales@dhtmlx.com to obtain license
*/