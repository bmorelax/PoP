!function(){var a=Handlebars.template,e=Handlebars.templates=Handlebars.templates||{};e["button-control"]=a({1:function(a,e,n,l,t){var s;return a.escapeExpression((s=null!=(s=n.id||(null!=e?e.id:e))?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"id",hash:{},data:t}):s))},3:function(a,e,n,l,t){var s,o=a.escapeExpression;return" "+o((s=null!=(s=n.key||t&&t.key)?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"key",hash:{},data:t}):s))+'="'+o(a.lambda(e,e))+'"'},5:function(a,e,n,l,t,s,o){var r,i=n.helperMissing,p=a.escapeExpression;return" "+p((r=null!=(r=n.key||t&&t.key)?r:i,"function"==typeof r?r.call(e,{name:"key",hash:{},data:t}):r))+'="#'+p((n.lastGeneratedId||e&&e.lastGeneratedId||i).call(e,{name:"lastGeneratedId",hash:{template:e,context:o[1]},data:t}))+'"'},7:function(a,e,n,l,t){var s;return'<span class="glyphicon '+a.escapeExpression((s=null!=(s=n.icon||(null!=e?e.icon:e))?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"icon",hash:{},data:t}):s))+'"></span> '},9:function(a,e,n,l,t){var s;return'<i class="fa fa-fw '+a.escapeExpression((s=null!=(s=n.fontawesome||(null!=e?e.fontawesome:e))?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"fontawesome",hash:{},data:t}):s))+'"></i>'},11:function(a,e,n,l,t){var s,o,r=a.escapeExpression;return'<span class="'+r(a.lambda(null!=(s=null!=e?e.classes:e)?s.text:s,e))+' pop-btn-title">'+r((o=null!=(o=n.text||(null!=e?e.text:e))?o:n.helperMissing,"function"==typeof o?o.call(e,{name:"text",hash:{},data:t}):o))+"</span>"},compiler:[7,">= 4.0.0"],main:function(a,e,n,l,t,s,o){var r,i,p,c=n.helperMissing,u="function",h=a.escapeExpression,f="<button ";return i=null!=(i=n.generateId||(null!=e?e.generateId:e))?i:c,p={name:"generateId",hash:{},fn:a.program(1,t,0,s,o),inverse:a.noop,data:t},r=typeof i===u?i.call(e,p):i,n.generateId||(r=n.blockHelperMissing.call(e,r,p)),null!=r&&(f+=r),f+' type="'+h((i=null!=(i=n.type||(null!=e?e.type:e))?i:c,typeof i===u?i.call(e,{name:"type",hash:{},data:t}):i))+'" class="'+h((i=null!=(i=n["class"]||(null!=e?e["class"]:e))?i:c,typeof i===u?i.call(e,{name:"class",hash:{},data:t}):i))+'" title="'+h((i=null!=(i=n.label||(null!=e?e.label:e))?i:c,typeof i===u?i.call(e,{name:"label",hash:{},data:t}):i))+'" '+(null!=(r=n.each.call(e,null!=e?e.params:e,{name:"each",hash:{},fn:a.program(3,t,0,s,o),inverse:a.noop,data:t}))?r:"")+" "+(null!=(r=n.each.call(e,null!=e?e["previoustemplates-ids"]:e,{name:"each",hash:{},fn:a.program(5,t,0,s,o),inverse:a.noop,data:t}))?r:"")+">\n	"+(null!=(r=n["if"].call(e,null!=e?e.icon:e,{name:"if",hash:{},fn:a.program(7,t,0,s,o),inverse:a.noop,data:t}))?r:"")+(null!=(r=n["if"].call(e,null!=e?e.fontawesome:e,{name:"if",hash:{},fn:a.program(9,t,0,s,o),inverse:a.noop,data:t}))?r:"")+(null!=(r=n["if"].call(e,null!=e?e.text:e,{name:"if",hash:{},fn:a.program(11,t,0,s,o),inverse:a.noop,data:t}))?r:"")+"\n</button>"},useData:!0,useDepths:!0})}();