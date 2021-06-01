/*var _elibrary_app_admin_root = 'http://localhost/elibrary/elibrary/admin/';
var _elibrary_app_user_root = 'http://localhost/elibrary/elibrary/portal/';
var _elibrary_app_root = 'http://localhost/elibrary/elibrary/';
	

*/




//alert('loaded');

	if (!String.prototype.trim) {
	 String.prototype.trim = function() {
	  return this.replace(/^\s+|\s+$/g,'');
	 }
	}


			/*$(function() {
		    $.ajaxSetup({
		        error: function(jqXHR, exception) {
		            if (jqXHR.status === 0) {
		                alert('Not connect.\n Verify Network.');
		            } else if (jqXHR.status == 404) {
		                alert('Requested page not found. [404]');
		            } else if (jqXHR.status == 500) {
		                alert('Internal Server Error [500].');
		            } else if (exception === 'parsererror') {
		                alert('Requested JSON parse failed.');
		            } else if (exception === 'timeout') {
		                alert('Time out error.');
		            } else if (exception === 'abort') {
		                alert('Ajax request aborted.');
		            } else {
		                alert('Uncaught Error.\n' + jqXHR.responseText);
		            }
		        }
		    });
		});
*/




 	function elibrary_admin_pull_user_details(getUserDetails){
 		$('#getUserDetails').html('<div class="alert alert-info"> Please wait while system processes your request.</div>');
 		var sData = 'getUserDetails='+getUserDetails;		
		//	alert(sData);     
			sendPostAjaxRequest(_elibrary_app_admin_root+'getUserDetails',sData,'#getUserDetailsModal','#getUserDetails','', '',false);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage
			$('#getUserDetailsModal').modal();
		
	}

	function ea_libraryCatalogueLoad(){

	}
	 

	function eg_trim(sStr) {
		
    	try {
			   sStr 	=	sStr.trim();
    			return sStr.replace(/^\s+|\s+$/gm,'');
			}
			catch(err) {
			    //sStr 	=	sStr.trim();
    			return sStr.replace(/^\s+|\s+$/gm,'');
			}



	}

	function saveAssessmentRecordByClient(){
		alert('This is the well comeented system in the go');
	}

	$(document).ready(function(){
		/*
			Prevent every # link not to propergate and show the # link in the url bar.
		*/
		 $('a[href=#]', '.preventDefault').on('click', function (e) {
        	e.preventDefault();
    	});

		/*	
			destroy every instances of modal object
		*/ 

		$(".modal").on('hidden.bs.modal', function (e) {
			//alert('delteing');
			console.log(e);
		    $(this).data('bs.modal', null);
		});



		// Student cancel reservation

		$('#CancelReservationModalID').on('submit', function(e){
			e.preventDefault();
			//console.log(e);
			//alert('you are here');
			var sData =$('#reservationID').serialize();
			 
			sendPostAjaxRequest(_elibrary_app_user_root+'reservation/delete',sData,'#CancelReservationModalID','#needed','testing', '',true);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage

			//window.location.href = window.location.href;
		});

		/*
			Right Handed shelve form
		*/
		$('#shelfFormID').on('submit', function(e){
			 
			e.preventDefault();
			var sData =$('#shelfFormID').serialize();			 
			sendPostAjaxRequest(_elibrary_app_user_root+'my_shelve/create',sData,'#shelfFormID','#shelfFormID','', '',true);
			

			 
		});

		$('#saveReservationModalFormID').on('submit', function(e){
			e.preventDefault();
			var sData =$('#saveReservationModalFormID').serialize();		
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_user_root+'reservation/add',sData,'#saveReservationModalFormID','#saveReservationModalFormID','', '',true);

		});

		$('#add2shelveModalID').on('submit', function(e){
			e.preventDefault();
			var sData =$('#add2shelveModalID').serialize();		
			 
			sendPostAjaxRequest(_elibrary_app_user_root+'reservation/add',sData,'#add2shelveModalID','#add2shelveModalID','', '',true);

		});

		$('#shelveRefreshBtn').on('click', function(e){
			e.preventDefault();
			var sData =$('#cat_subject').serialize();		
			 
			sendPostAjaxRequest(_elibrary_app_user_root+'my_shelve/refresh',sData,'#shelveRefreshBtn','#recieving_shelf','', '',false);

		});


		

		$('#add2shelveModalIDForms').on('submit', function(e){
			e.preventDefault();
			var sData =$('#add2shelveModalIDForms').serialize();		
			//alert(sData);     
			sendPostAjaxRequest(_elibrary_app_user_root+'my_shelve/add',sData,'#add2shelveModalIDForms','#responsee','', '',true);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage
		});

		//$('#catcat_form').serialize();
		//misc category / collection
		$('#catcat_form').on('submit', function(e){
			e.preventDefault();
			var sData =$('#catcat_form').serialize();		
			// alert(sData); 
			sendPostAjaxRequest(_elibrary_app_admin_root+'misc/crud_category',sData,'#catcat_form','#respy','', '',true);

		});


		$('#cat_format_form').on('submit', function(e){
			e.preventDefault();
			var sData =$('#cat_format_form').serialize();		
			//alert(sData);  
			sendPostAjaxRequest(_elibrary_app_admin_root+'misc/crud_format',sData,'#cat_format_form','#respy2','', '',true);

		});
		$('#cat_subject_form').on('submit', function(e){
			e.preventDefault();
			var sData =$('#cat_subject_form').serialize();		
			//alert(sData);  
			sendPostAjaxRequest(_elibrary_app_admin_root+'misc/crud_subject',sData,'#cat_subject_form','#respy_save_subject','', '',true);

		});

		$('#adminViolation_form').on('submit', function(e){
			e.preventDefault();
			var sData =$('#adminViolation_form').serialize();		
			//alert(sData);  
			sendPostAjaxRequest(_elibrary_app_admin_root+'violation/crud_violation',sData,'#adminViolation_form','#respy3','', '',true);

		});


		$('#resourceReservationDetailsForms').on('submit', function(e){
			e.preventDefault();
			var sData =$('#resourceReservationDetailsForms').serialize();		
			 //setTimeout('',999999);
			 //alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'reservations/update',sData,'#resourceReservationDetailsForms','#ajaxResponseReceptionID','', '',true);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage
		});


		$('#resourceBorrowDetailsForms').on('submit', function(e){
			e.preventDefault();
			var sData =$('#resourceBorrowDetailsForms').serialize();		
			 //setTimeout('',999999);
			 //alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'borrowed/update',sData,'#resourceBorrowDetailsForms','#ajaxResponseReceptionID','', '',true);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage
		});


		$('#news_event_form').on('submit', function(e){
			e.preventDefault();
			var sData =$('#news_event_form').serialize();		
			 // alert(_elibrary_app_admin_root+'news_events/crud');
			sendPostAjaxRequest(_elibrary_app_admin_root+'news_events/crud',sData,'#news_event_form','#hidden_news_key_ajax_res','', '',true);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage
		});

		$('#deleteNewsModalFormID').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteNewsModalFormID').serialize();		
		 
			sendPostAjaxRequest(_elibrary_app_admin_root+'news_events/crudd',sData,'#deleteNewsModalFormID','#deleteResponse','', '',true);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage
		});

		$('#deleteShelveItemModalID').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteShelveItemModalID').serialize();		
	 
			sendPostAjaxRequest(_elibrary_app_user_root+'favourite/delf',sData,'#deleteShelveItemModalID','#deleteResponse','', '',true);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage
		});



		// Delete my file 

		$('#deleteFileModalForm').on('submit', function(e){
			e.preventDefault();
			//console.log(e);
			//alert('you are here');
			var sData =$('#file_key').serialize();
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_user_root+'my_files/delf',sData,'#deleteFileModalForm','#response','', '',true);
			//sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage

			//window.location.href = window.location.href;
		});

		$('#deleteCataloguesModalFormID').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteCataloguesModalFormID').serialize();
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'catalog/dl',sData,'#deleteCataloguesModalFormID','#deleteResponse','', '',true);
			 
		});

		$('#deleteLibraryModalFormID').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteLibraryModalFormID').serialize();
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'library/dl',sData,'#deleteLibraryModalFormID','#deleteResponse','', '',true);
			 
		});


		$('#deleteExternalLibraryModalFormID').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteExternalLibraryModalFormID').serialize();
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'external_library/dl',sData,'#deleteLibraryModalFormID','#deleteResponse','', '',true);
			 
		});



		$('#deleteViolationRecordForm').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteViolationRecordForm').serialize();
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'misc/dlv',sData,'#deleteViolationRecordForm','#ViolationTypeIDajax_response2','', '',true);
			 
		});

		$('#deleteCategoryRecordForm').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteCategoryRecordForm').serialize();
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'misc/dlc',sData,'#deleteCategoryRecordForm','#categoryIDajax_response0','', '',true);
			 
		});

		$('#deleteFormatRecordForm').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteFormatRecordForm').serialize();
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'misc/dlf',sData,'#deleteFormatRecordForm','#formatIDajax_response1','', '',true);
			 
		});

		$('#deleteSubjectRecordForm').on('submit', function(e){
			e.preventDefault();
			var sData =$('#deleteSubjectRecordForm').serialize();
			//alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'misc/dls',sData,'#deleteSubjectRecordForm','#subjectIDajax_response4','', '',true);
			 
		});

		$('#system_config').on('submit', function(e){
			e.preventDefault();
			var sData =$('#system_config').serialize();
			alert(sData);
			sendPostAjaxRequest(_elibrary_app_admin_root+'settings/save',sData,'#system_config','#pull-right','', '',false);
			 
		});






		/*

		$('.catalogueListDetailsClass').on('click', function(e){
			e.preventDefault();
			//var sData =$('#catalogueListDetailsClass').serialize();
			//alert(sData);
			console.log(this);
			sendPostAjaxRequest(_elibrary_app_admin_root+'catalog/delete',sData,'#deleteCataloguesModal','#deleteResponse','', '',false);
			 
		});*/



	/*

		for handling submissions

	*/
	
	$('#primaryAuthorAdderBtn').on('click',function(e){
		//console.log(this);
		//alert(this);

		var $sTemplate 		=	$('#primary_author_increament_holder_template'),
			$oCloned 		=	$sTemplate
										.clone()
										//.replaceWith()
										//.find('i')
										//.removeClass('icon-plus')
										//.addClass('icon-minus')
										.removeClass('elibrary_hide_display')
										//.removeClass('elibrary_hide_display')
										.removeClass('hidden')
										.removeClass('hide')
                                		.removeAttr('id')
                                		.removeAttr('style')
										.appendTo($("#author_attacher"));
										//console.log($oCloned);
	});





	$('#primarySubjectAdderBtn').on('click',function(e){
		//console.log(this);
		//alert(this);

		var $sTemplate 		=	$('#primary_subject_increament_holder_template'),
			$oCloned 		=	$sTemplate
										.clone()
										//.replaceWith()
										//.find('i')
										//.removeClass('icon-plus')
										//.addClass('icon-minus')
										.removeClass('elibrary_hide_display')
										.removeClass('hidden')
										.removeClass('hide')
                                		.removeAttr('id')
                                		.removeAttr('style')
										.appendTo($("#subject_attacher"));
										//console.log($oCloned);
	});



		
 
		 
	});

	function  removeThisElement(oObj){

		var $oRow  = $(oObj).parents('.parent_holder');

		//console.log(oObj);

		$oRow.remove();
	}


	function markascomplete(iKey){
		//alert(iKey);
		if(!confirm('Are you sure you want to procced knowing that this action is irrevisable?')){
			return false;
		}
		var sData = 'status_chager='+iKey;
		sendPostAjaxRequest(_elibrary_app_admin_root+'change_status/change_status',sData,'body','#staus_change_response','', '',true);
		 


	}


	function adminFormatEditLauncher(title,id){
		$('#cat_format_key').val(id);
		$('#cat_format_title').val(title);
		$('#cat_format_titlemodal').modal();
	}
	function adminCategoryEditLauncher(title,id){
		$('#cat_category_key').val(id);
		$('#category_title').val(title);
		$('#myModalcat_category_').modal();
	}

	function adminSubjectEditLauncher(title,id){
		$('#cat_subject_key').val(id);
		$('#cat_subject_title').val(title);
		$('#cat_subject_titlemodal').modal();
	}

	

	function adminViolationEditLauncher(title,fee,descr,id){
		//alert(1);
		$('#admin_violation_key').val(id);
		$('#admin_violation_title').val(title);
		$('#admin_violation_fine').val(fee);
		$('#admin_violation_description').val(descr);
		$('#admiVioaltionFormsParentDiv').modal();
	}

	function processAdminBookCollection(iKey){
		//alert('wecome to it');
		//alert(iKey);
		var oPick_up_date 		= 		$('#book_date_picked_'+iKey);
		var oReturn_up_date 	= 		$('#book_date_return_'+iKey);
		var oUser 				=		$('#b_id');
		//alert(oUser.val());
		//console.log(oUser.val())
		if(oUser.val() =='' || oUser.val() == null){
		 	oUser.focus();
		 	alert("Please fill the user's code field");
		 	return false;
		 }

		 if(oPick_up_date.val() =='' || oPick_up_date.val() == null){
		 	oPick_up_date.focus();
		 	alert('Please fill the necessary form');
		 	return false;
		 }
		 

		 if(oReturn_up_date.val() =='' || oReturn_up_date.val() == null){
		 	oReturn_up_date.focus();
		 	alert('Please fill the necessary form');
		 	return false;
		 }


		 
		
		var sData =  'item='+iKey+'&user='+oUser.val()+'&oPick_up_date='+oPick_up_date.val()+'&oReturn_up_date='+oReturn_up_date.val();    //$('#deleteFormatRecordForm').serialize();
		// alert(sData);
		sendPostAjaxRequest(_elibrary_app_admin_root+'borrowed/update',sData,'#wrapNotification','#ajax_response1','', '',false);
		

	}
	

	function fireEvent(element,event) {
   if (document.createEvent) {
       // dispatch for firefox + others
       var evt = document.createEvent("HTMLEvents");
       evt.initEvent(event, true, true ); // event type,bubbling,cancelable
       return !element.dispatchEvent(evt);
   } else {
       // dispatch for IE
       var evt = document.createEventObject();
       return element.fireEvent('on'+event,evt)
   }
}



	function launchAdminCategoryModal(iKey){
		document.getElementById('categoryID').value = iKey;
		$('#adminCategoryDeleteModalConfirm').modal();
		//alert($('#catalogueDeleteHiddenID').val());
		return false;
	}
	
	function launchAdminFormatModal(iKey){
		document.getElementById('formatID').value = iKey;
		$('#adminFormatDeleteModalConfirm').modal();
		//alert($('#catalogueDeleteHiddenID').val());
		return false;
	}

	function launchAdminViotypeModal(iKey){
		document.getElementById('ViolationTypeID').value = iKey;
		$('#adminViolationDeleteModalConfirm').modal();
		//alert($('#catalogueDeleteHiddenID').val());
		return false;
	}

	function launchAdminSubjectModal(iKey){
		document.getElementById('subjectID').value = iKey;
		$('#adminSUbjectDeleteModalConfirm').modal();

		//alert('launched launchAdminSubjectModal');
		//alert($('#catalogueDeleteHiddenID').val());
		return false;
	}



	function launchAdminNewsModal(iKey){
		document.getElementById('news_event_ajax_reciever').innerHTML = '<div class="alert alert-info"> Please wait while system processes your request. </div>';
		var sData = 'news_edit_key='+iKey;
		//$( "#chat-news_event_ajax_reciever" ).load(_elibrary_app_admin_root+'news_events/');
		$('#news_events_modal').modal('toggle');
		sendPostAjaxRequest(_elibrary_app_admin_root+'news_events/crudu',sData,'#news_events_modal','#news_event_ajax_reciever','', '',false);
		//alert($('#catalogueDeleteHiddenID').val());
		return false;
	}

	 



	function elibraryAdminDeleteCatalogueLauncher(iID){
		document.getElementById('catalogueDeleteHiddenID').value = iID;
		$('#deleteCataloguesModal').modal();
		//alert($('#catalogueDeleteHiddenID').val());
	}

	function elibraryAdminDeleteLibraryLauncher(iID){
		document.getElementById('libraryDeleteHiddenID').value = iID;
		$('#deleteLibrarysModal').modal();
		//alert($('#catalogueDeleteHiddenID').val());
		return false;
	}


	function moveShelfItemDialog(iItem, iFolder,sTitle){
		//alert(iItem);
		$("#shelveitemTitle").html('');	
		
		$("#add2ShelveHiddenKey").val(iItem);	
		 $("#shelveitemTitle").html(sTitle).text();	

		$('#add2shelveModal').modal('show');
	}

	function testing(sArg){
		alert(sArg);
	}

	function saveReturnCatalogueItem(id1,id2){
		 if(!confirm('Are you sure this student has returned this item?')){
		 	return false;
		 }
		 var offense = $('#return_offenses'+id2).val();
		 var returndate = $('#return_form_date_returned'+id2).val();
		 var comm 		= $('#return_form_date_returned'+id2).val();
		 var iItem 		= $('#cat_id'+id2).val();
		var sData ='trans='+id1+'&item='+iItem+'&returndate='+returndate+'&offense='+offense+'&comm='+comm;		
			 //setTimeout('',999999);
			//alert(_elibrary_app_admin_root+'favourite/delf');
		 //alert(_elibrary_app_admin_root+'returned/crud/');
		sendPostAjaxRequest(_elibrary_app_admin_root+'returned/crud/',sData,'#allWrapper','#returnResponse','', '',true);
			
		return false;
	}

	function adminLibraryDeleteModalConfirm(id){
		var mo ='<div class="modal fade" id="adminLibraryDeleteModalConfirm" tabindex="-1" role="dialog" aria-labelledby="adminLibraryDeleteModalConfirm" aria-hidden="true">';
				   mo +=' <div class="modal-dialog">';
				      mo +='<div class="modal-content " >';
				     mo +=' <form id="adminLibraryDeleteModalConfirmForm"   method="post" name="adminLibraryDeleteModalConfirmForm"  >';
				  

				     mo +='   <div class="modal-header">';
				     mo +='     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
				      mo +='    <h4 class="modal-title">Delete Record</h4>';
				      mo +='  </div>';
					 mo +='       <div class="modal-body" id="needed">';
					   mo +='      <div class="alert alert-info"> Are you sure you want to delete this record? </div>';
					        

					     mo +='     <button type="button" class="btn btn-primary" data-dismiss="modal">No, Not now </button>';
				         mo +=' <input type= "hidden" name="reservationID" value="0" id="reservationID" />';
				         mo +=' <input id="CancelReservationModalIDSubmit" type="submit" class="btn btn-danger" value="Yes, Cancel my reservation"  name= "sav"/>';
				        

					mo +='        </div>';
				     mo +='   <div class="modal-footer">';
				       mo +='  </div>';

				       mo +='  </form>';
				     mo +=' </div><!-- /.modal-content -->';
				  mo +='  </div><!-- /.modal-dialog -->';
				mo +='  </div><!-- /.modal -->';

		$('#adminLibraryDeleteModalConfirm').modal('toggle');
	}


	function  confirmDeleteShielveResourceItem(iID){
		$('#iFileId').val(iID);
			$('#deleteShelveItem').modal( );
	}

	function showNewsDeleteModal(id){
			 
			$('#newsDeleteHiddenID').val(id);
			$('#deleteNewsModal').modal();

		}


 
	function adminReservationDetailsLauncher(iID){
		//alert(iID);
		if(iID < 1){
			alert('Impossible');
			return false;
		}
		var sData = 'pulling_key='+iID;
		//alert(sData);
		sendPostAjaxRequest(_elibrary_app_user_root+'reservation/',sData,'body','#pulling_modal','', '',false);
		$('#pulling_modal').modal('show');

	}

	function __elibraryDynamicModal(){
		// function to show dynamic modal at run time

	}
 
	function __elibraryModalReservationForm(library,id,title){
		//alert('welcome to the system');
		//$("#catReciever").html('');	

		$("#itemID").val(id);	
		  $("#itemTitle").val(title).text();	
		 $("#libs").val(library).text();	
		//alert(ff);
		$("#reservationModal").modal();	
	}

	function __elibraryModalAddToShelveForm(id,title){
		//alert('welcome to the system');
		$("#shelveitemTitle").html('');	
		//$('body').modalmanager('loading');
		$("#add2ShelveHiddenKey").val(id);	
		  $("#shelveitemTitle").html(title).text();	
		  //document.getElementById('itemTitle').innerHTML = title; 
		  //alert('title');
		//alert(ff);
		$("#add2shelveModal").modal();	

		//alert($("#add2ShelveHiddenKey").val());
	}

	function refreshShevlveList(){
		alert('Please Refresh the page');
	}



	function deleteReservationPopUp(title,Id){
		//alert(4344);

		/*$("#itemID").val(id);	
		var f = $("#itemTitle").val(title).text();	
		//var ff =$("#libs").val(library).text();*/	
		$("#reservationID").val(Id);	
		$("#CancelReservationModal").modal();

		//alert($("#reservationID").val());
	}	


	function deleteFilePopUp(Id){
		 	
		$("#file_key").val(Id);	
		$("#deleteFileModal").modal();
		//alert($("#file_key").val());
		//alert($("#reservationID").val());
	}	



 
	 

	 



	function ajaxErrorHandler(obj){
		alert("An error occured while executing ajax transaction. \n Please try again.\n");
		console.log("This is the error return from the request \n");
		console.log(obj);
	}


		// general function to be used in send post ajax request
		function sendPostAjaxRequest(sUrl,sData,sNotification,sResponseField, oReferenceParam, successCallBack,bReloadPage){
			if(sUrl.length < 1 || sUrl =='' || sUrl == ' '){
				sUrl = ajaxUrl;
			}
			
				if(sNotification.length < 1 || sNotification =='' || sNotification == ' '){
				sNotification = 'body';
			}
			 
			//var returner = null;
			sUrl 		=		eg_trim(sUrl);
			//alert(sUrl);
			$(sNotification).modalmanager('loading');
			//alert('no pass here');
			//alert(sNotification);
			//alert(_elibrary_app_root+sUrl);
			 
			$.ajax({
				type: "POST",
				/*dataType: "json",*/

				url:  sUrl,
				data: sData,
				/*error: ajaxErrorHandler,*/
				cache: false,
				success: function(sResp,u){
					 //alert(JSON.parse(sResp));
					 if(successCallBack !='' && successCallBack != null){
					 	try{
					 		successCallBack(sResp);
					 	}catch(e){
					 		console.log(e);
					 	}
					 }
					 //alert(typeof(oReferenceParam));
					 if(oReferenceParam !='' && oReferenceParam != null && typeof(oReferenceParam) =='object'){
					 	oReferenceParam.responseText = sResp;
					 }else if(sResponseField !=''){
					 		$(sResponseField).html(sResp);
					 }
					return sResp;
					// $(sNotification).modalmanager('loading');
				},
				error : function(jqXHR, textStatus, errorThrown){
					console.log(errorThrown);
					$(sNotification).modalmanager('loading');
					//alert('An error has occured while processing your request. please try again later');
					if (jqXHR.status === 0) {
		                alert('Not connect.\n Verify Network.');
		            } else if (jqXHR.status == 404) {
		                console.log('Requested page not found. [404]');
		            } else if (jqXHR.status == 500) {
		                 console.log('Internal Server Error [500].');
		            } else if (exception === 'parsererror') {
		                 console.log('Requested JSON parse failed.');
		            } else if (exception === 'timeout') {
		                 console.log('Time out error.');
		            } else if (exception === 'abort') {
		                 console.log('Ajax request aborted.');
		            } else {
		                 console.log('Uncaught Error.\n' + jqXHR.responseText);
		            }



				}

			}).done(function(fds){
				//alert(fds);
				$(sNotification).modalmanager('removeLoading');
				//alert('completed');
				if(bReloadPage ==true){
					setTimeout(function(){ window.location.href = window.location.href;}, 1000);
					//window.location.href = window.location.href;
				}
				
			});
			/*alert(returner.responseText);
			for(var i in returner){
				console.log(i);
				console.log('\n');
			}
			return returner;*/
		}





	function change2Option($data, $select ,$k , $v ,$label){
		$data = $data;
		
		$c =count($data);
		$sd = '';
		//if($c < 1){
			$sd +=   	'<option  selected ="selected"   value ="" >'+$label+'</option>';
	//	}
		for( var $i =0 ; $i < $c; $i++){
			$sel ='';
			if($data[$i][$k] ==$select ){
			$sel = 'selected ="selected"';
			}
			
		$sd += '<option  '+$sel+'   value ="'+$data[$i][$k]+'" >'+$data[$i][$v]+' </option>';
			
			
		}
		
			$sd += '';
			
			
			
			return $sd;
		
	}



	//console.log(__eLibraryJs.sendPostAjaxRequest());

	