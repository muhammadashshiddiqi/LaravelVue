// Call the dataTables jQuery plugin
$(document).ready(function() {
//$('#tbl-barang').DataTable();
  $('#tbl-barang').DataTable({
  	pagingType : "full_numbers",
  	autoWidth : false,
  	processing : true,
  	serverSide : true,
  	destroy : true,
  	ajax : {
  		url: "{{ route('/barang') }}",
  		type: 'GET',
  		headers: { 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content },
  		dataSrc: function(json){
  			console.log(json.data);
  		}
  	}
  });
});
