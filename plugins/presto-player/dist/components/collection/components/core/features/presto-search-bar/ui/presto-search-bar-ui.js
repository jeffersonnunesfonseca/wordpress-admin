import{h}from"@stencil/core";import{CloseIcon,PrevIcon,NextIcon,SearchIcon}from"./icons";export class PrestoSearchBarUi{constructor(){this.value=void 0,this.placeholder=void 0,this.hasNavigation=void 0,this.focused=void 0,this.placeholderWidth=void 0}handleSearch(e){e.preventDefault(),this.value=e.target.value}handleFocus(){this.focused=!0}handleBlur(){this.value||(this.focused=!1)}componentDidLoad(){this.handlePlaceholderSize()}handlePlaceholderSize(){setTimeout((()=>{this.placeholderWidth=this.placeholderElement.offsetWidth}),50)}handleValueChange(){this.search.emit(this.value)}watchPropHandler(e){this.focusChange.emit(e)}handleClick(){this.focused=!0,setTimeout((()=>{this.input.focus()}),50)}handleClear(e){return e.preventDefault(),e.stopImmediatePropagation(),this.value="",this.focused=!1,!1}handleNext(e){e.stopImmediatePropagation(),e.preventDefault(),this.nextNav.emit()}handlePrevious(e){e.stopImmediatePropagation(),e.preventDefault(),this.previousNav.emit()}render(){return h("div",{key:"d7b960d71649846a8f0e27257ee80e0b6800d94e",class:{"search-bar":!0,"search-bar--is-active":this.focused||!!this.value,"search-bar--has-navigation":this.hasNavigation},onClick:()=>this.handleClick()},h("span",{key:"b1944c3644e89bc074bdafaa560cfac3dd4a8281",class:"search-bar__search-icon search-bar__icon"},h(SearchIcon,{key:"8028bc5c605cfd0eae9cbfe811ffcada85768ab6"})),h("div",{key:"e7524109687bfa22fd10cdecd6a71ed8432d7671",class:"search-bar__placeholder",ref:e=>this.placeholderElement=e,"aria-hidden":!0},this.placeholder),h("input",{key:"1b0da4f3908d2129c7b28214b0fcc5422c4db607",type:"text",value:this.value,placeholder:this.placeholder,ref:e=>this.input=e,style:{width:(this.placeholderWidth||0)+"px"},onInput:e=>this.handleSearch(e),onFocus:()=>this.handleFocus(),onBlur:()=>this.handleBlur()}),h("span",{key:"89db2bd52d7672558f3f8b30c0e6c52d834eb4d9",class:"search-bar__controls"},h("span",{key:"c4187fee0a2268d95dfbaa27507cb76236b28c97",class:"search-bar__control-prev",onClick:e=>this.handlePrevious(e)},h(PrevIcon,{key:"5ba6a4a8a221e43842ced26e9c2f0b61075a1aac"})),h("span",{key:"76aa40f03ee80a7a486b88d7e3a55ecb3cbb62cb",class:"search-bar__control-next",onClick:e=>this.handleNext(e)},h(NextIcon,{key:"b8bc259fdcc0e3c06c0b0dafad7512d2897c9b22"})),h("div",{key:"e64666fb5be8412a8dead167c5b0c28fa02c8b1f",class:"search-bar__control-clear",onClick:e=>this.handleClear(e)},h(CloseIcon,{key:"e871f7e8b626e28500368cf46faf05ee4a4aed93"}))))}static get is(){return"presto-search-bar-ui"}static get encapsulation(){return"shadow"}static get originalStyleUrls(){return{$:["presto-search-bar-ui.scss"]}}static get styleUrls(){return{$:["presto-search-bar-ui.css"]}}static get properties(){return{value:{type:"string",mutable:!0,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:"The value for the search."},attribute:"value",reflect:!1},placeholder:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:"The placeholder."},attribute:"placeholder",reflect:!1},hasNavigation:{type:"boolean",mutable:!1,complexType:{original:"boolean",resolved:"boolean",references:{}},required:!1,optional:!1,docs:{tags:[],text:"Has results"},attribute:"has-navigation",reflect:!1}}}static get states(){return{focused:{},placeholderWidth:{}}}static get events(){return[{method:"previousNav",name:"previousNav",bubbles:!0,cancelable:!0,composed:!0,docs:{tags:[],text:"Previous is navigated."},complexType:{original:"void",resolved:"void",references:{}}},{method:"nextNav",name:"nextNav",bubbles:!0,cancelable:!0,composed:!0,docs:{tags:[],text:"Next is navigated"},complexType:{original:"void",resolved:"void",references:{}}},{method:"search",name:"search",bubbles:!0,cancelable:!0,composed:!0,docs:{tags:[],text:"Search is performed"},complexType:{original:"string",resolved:"string",references:{}}},{method:"focusChange",name:"focusChange",bubbles:!0,cancelable:!0,composed:!0,docs:{tags:[],text:"Search is performed"},complexType:{original:"boolean",resolved:"boolean",references:{}}}]}static get watchers(){return[{propName:"placeholder",methodName:"handlePlaceholderSize"},{propName:"value",methodName:"handleValueChange"},{propName:"focused",methodName:"watchPropHandler"}]}}