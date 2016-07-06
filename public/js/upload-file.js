$(document).ready(function(){
	function htmlEncode(str) {
		if (str != '' && str != null) {
			return str.replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/'/g, '&#039;').replace(/"/g, '&quot;');
		}
		return str;
	};
	$('#file-upload').on('change',function(){
		var filename = this.value.split('\\').pop();
		$('#filename').val(filename);
	})
});
function openFile(){
	$('#file-upload').click();
		return false;
}