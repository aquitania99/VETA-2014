function ConditionalClient(a,b){this.config={};this.$fb=a}ConditionalClient.prototype.clone=function(c){if(c==null||typeof(c)!="object"){return c}var a={};for(var b in c){a[b]=this.clone(c[b])}return a};ConditionalClient.prototype.selected_values={};ConditionalClient.prototype.initialized={};ConditionalClient.prototype.init_client=function(){this.set_config_json(data_validation);this.apply_rules();this.init_events(this.config)};ConditionalClient.prototype.init_events=function(a){var d=this;for(var b in a){if(!a.hasOwnProperty(b)){continue}switch(b){case"name":case"operator":case"value":break;case"element":if(!this.initialized.hasOwnProperty(a[b]["name"])){this.initialized[a[b]["name"]]=true;var c=this.get_array_elements(a[b]["name"]);this.$fb(c).change(function(){d.apply_rules();d.$fb.fb_resize()});this.$fb(c).keydown(function(f){if(f.keyCode==13){d.apply_rules();d.$fb.fb_resize()}})}break;default:this.init_events(a[b])}}};ConditionalClient.prototype.set_config=function(a){this.config=this.clone(a)};ConditionalClient.prototype.set_config_json=function(b){if(typeof b=="undefined"||b===null||typeof b!="string"){return false}var a=JSON.parse(b);if(!a.hasOwnProperty("conditionalRules")){return false}this.set_config(a.conditionalRules);return true};ConditionalClient.prototype.apply_rules=function(){this.selected_values={};for(var a in this.config){if(this.config.hasOwnProperty(a)){this.apply_rule_id(a)}}return true};ConditionalClient.prototype.apply_rule_id=function(a){if(arguments.length!=1){return false}if(typeof this.config[a]=="undefined"||this.config[a]===null){return false}if(!this.check_rule(this.config[a])){this.$fb("#"+a).hide();this.$fb("#"+a).is("input, select, textarea")?this.$fb("#"+a).attr("disabled",true):this.$fb("input, select, textarea","#"+a).attr("disabled",true);this.$fb("#"+a).is("#fb-submit-button")&&this.$fb("#docContainer *").bind("keydown.fb_enter",function(b){if(b.keyCode==13){b.preventDefault();return false}})}else{this.$fb("#"+a).css("display","inline-block");this.$fb("#"+a).is("input, select, textarea")?this.$fb("#"+a).removeAttr("disabled"):this.$fb("input, select, textarea","#"+a).removeAttr("disabled");this.$fb("#"+a).is("#fb-submit-button")&&this.$fb("#docContainer *").unbind("keydown.fb_enter")}return true};ConditionalClient.prototype.check_rule=function(a){for(var b in a){if(!a.hasOwnProperty(b)){continue}switch(b){case"set":if(a[b]["operator"]=="and"){return this.check_rule(a[b]["rule1"])&&this.check_rule(a[b]["rule2"])}else{if(a[b]["operator"]=="or"){return this.check_rule(a[b]["rule1"])||this.check_rule(a[b]["rule2"])}}case"element":return this.check_value(a[b]["name"],a[b]["operator"],a[b]["value"]);default:return true}}};ConditionalClient.prototype.check_value=function(c,b,f){var a=this.get_array_values(c);var e=false;for(var d=0;d<a.length;d++){if(a[d]==f){e=true;break}}if(b=="is"){return e}if(b=="is_not"){return !e}return true};ConditionalClient.prototype.get_array_values=function(b){if(this.selected_values.hasOwnProperty(b)){return this.selected_values[b]}var d=this.$fb("#docContainer").find('[name="'+b+'"]');var a=new Array();var c=this;if(!d.length){d=this.$fb("#docContainer").find('[name="'+b+'[]"]')}if(d.is("select")){this.$fb.each(d.find("option:selected"),function(f,e){a.push(c.$fb(this).val())})}else{if(d.is("input:checkbox")||d.is("input:radio")){this.$fb.each(this.$fb(d).parent().find("input:checked"),function(f,e){a.push(c.$fb(this).val())})}else{if(d.hasClass("placeholder")){a.push("")}else{a.push(d.val())}}}this.selected_values[b]=a;return a};ConditionalClient.prototype.get_array_elements=function(a){var b=this.$fb('#docContainer [name="'+a+'"]');if(!b.length){b=this.$fb('#docContainer [name="'+a+'[]"]')}return b};