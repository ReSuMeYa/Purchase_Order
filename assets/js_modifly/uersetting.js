var linkurl = function linkurl() {
  var url = "../../index.php/URL";
    var Httpreq = new XMLHttpRequest(); 
    Httpreq.open("GET",url,false);
    Httpreq.send(null);
    return Httpreq.responseText; 
}

$("#tableusersetting").DataTable({
    //"searching": false,
    "lengthChange": false,
    "responsive": false,
    "paging": "false",
    "fixedColumns":{  "heightMatch":"auto","leftColumns":"9"},
    "colReorder": "true",
    "language": {
    "lengthMenu":"แสดง _MENU_ แถว",
    "search":"ค้นหา:",
    "info":"แสดง _START_ ถึง _END_ ทั้งหมด _TOTAL_ แถว",
    "infoEmpty":"แสดง 0 ถึง 0 ทั้งหมด 0 แถว",
    "infoFiltered":"(จาก ทั้งหมด _MAX_ ทั้งหมด แถว)",
    "processing": "กำลังโหลดข้อมูล...",
    "zeroRecords": "ไม่มีข้อมูล",
    "paginate": {
    "first": "หน้าแรก",
    "last": "หน้าสุดท้าย",
    "next": "ต่อไป",
    "previous": "ย้อนกลับ"
    },
    },
    "order":[[0,'desc']]
    });

var editdata = function editdata(e) {
	var urlresult = JSON.parse(linkurl());
	$("#showeditdatauser").click();
	var primary = $(e).attr('primary');
	$.ajax({
		url: urlresult.edituseradata,
		type: 'POST',
		data: {primary: primary},
		success: function (callblack) {
			$("#showcallblackedit").html(callblack);
		}
	});
}

var updatedata =function updatedata(e) {
	var urlresult = JSON.parse(linkurl());
	var primary =$(e).attr('primary');
	var editfname =$("#editfname").val();
	var editlname =$("#editlname").val();
	var edittype =$("#edittype").val();
	var editmail =$("#editmail").val();
	var editdep =$("#editdep").val();
	var editdiv =$("#editdiv").val();
	$.ajax({
		url: urlresult.updatedata,
		type: 'POST',
		data: {primary: primary,editfname: editfname,editlname:editlname,edittype:edittype,editmail:editmail,editdep:editdep,editdiv:editdiv},
		success:function (s) {
			var msg = JSON.parse(s);
			if (msg.Success =='OK') {
			alertify.set('notifier','position', 'อัพเดตUserเสร็จสิ้น');
        	alertify.success('แจ้งเตือน : ' + alertify.get('notifier','position'));	
			}
			$("#closemodal").click();
		}
	});

	
}


