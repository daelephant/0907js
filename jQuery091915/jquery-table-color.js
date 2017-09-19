/**
	author:itcast-php0710
	date:2015-9-21 17:21
	example:
		htmlcode:
		<table>
        <tr><td>序号</td><td>名称</td><td>价格</td><td>数量</td></tr>
        <tr><td>1</td><td>iphone</td><td>6500</td><td>15</td></tr>
        <tr><td>2</td><td>htc</td><td>3200</td><td>6</td></tr>
        <tr><td>3</td><td>samsung</td><td>4600</td><td>23</td></tr>
        <tr><td>4</td><td>huawei</td><td>1900</td><td>31</td></tr>
        </table>
		jquerycode:
		$(function(){
            $('table').setTableColor('yellow','lightblue');
        });
*/
$.fn.setTableColor = function(c1,c2){
	//this代表table的jquery对象
	//首行
	this.find("tr:first").css('background-color',c1);
	//其余行
	this.find("tr:gt(0):odd").css('background-color',c2);
}