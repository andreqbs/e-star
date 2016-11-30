	

	function ajaxPostRedirect(sendString,postURL,redirectURL){

 
    $.ajax({
        type: "POST",
                    url: postURL,
                    data: sendString,
                    cache: false,
                    success: function(html){

                        window.location = redirectURL;
                   },
                   error: function(xhr, ajaxOptions, thrownError){ 
                        alert(xhr.responseText);
                    }
    });

   
}

function makeComboBox(select,url,filter,optionvalue,option)
          {

             $.ajax({                                      
                url: url+'?filter='+filter,                  
                data: "",                  
                dataType: 'json',          
                success: function(data)    
                {
                  $.each(data, function(key, arr) {
                                $('#'+select).append('<option id="' + key + '" value="'+arr[optionvalue]+'">' + arr[option] + '</option>');
                        });    
                } 
            });
          }

          

          function addComboAllQuizType(select,ajaxurl)
          {
              makeComboBox(select,ajaxurl,'quiz','idQuizType','QuizType');    
          }

          function addComboAllDiscipline(select,ajaxurl)
          {
              makeComboBox(select,ajaxurl,'discipline','idDiscipline','DisciplineName');    
          }

          function addComboAllStudySubject(select,ajaxurl)
          {
              makeComboBox(select,ajaxurl,'studysubject','idStudySubject','StudySubjectName');    
          }


function addQuestion_Alternatives(table,url,filter,quizid)
          {

             $.ajax({                                      
                url: url+'?filter='+filter+'&quizid='+quizid,
                data: "",                  
                dataType: 'json',          
                success: function(data)    
                { 
                  $.each(data, function(key, arr) {
                                
                                var string = '<tr><td style="font-size:18px; padding-top:2%">';
                                string += '<div >'+arr[1]+'</div>';
                                for (var i = 2; i < arr.length; i++) {
                                string += '<br><div id="">Alternativa '+(i-1)+': '+arr[i].content+'</div>';
                                };

                                string += '</td><td><div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">';
                                string += '<a href="#" id="'+arr[0]+'" type="button" data-toggle="modal" data-target="#mod3"  onclick="openDeleteModal('+"'"+'mod3'+"'"+',this.id)">';
                                string += '<div class="row custom-icon"><i class="glyphicon glyphicon-trash" style="position:relative; top:50%; left:10%" title="edit"></i>';
                                string += '</div></a></div></td>';

                                string += '<td><div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">';
                                string += '<a href="#" id="'+arr[0]+'" type="button" data-toggle="modal" data-target="#mod2" onclick="openEditModal('+"'"+'mod2'+"'"+','+"'"+'editquestion.php'+"'"+',this.id)" >';
                                string += '<div class="row custom-icon"><i class="glyphicon glyphicon-edit" style="position:relative; top:50%; left:170%" title="edit"></i>';
                                string += '</div></a></div></td></tr>';

                                $('#'+table).append(string);

                        });    
                } 
            });
          }



function addQuestions_Run(table,url,filter,quizid)
          {

             $.ajax({                                      
                url: url+'?filter='+filter+'&quizid='+quizid,
                data: "",                  
                dataType: 'json',          
                success: function(data)    
                {
                  $.each(data, function(key, arr) {
                                var letters = ["a)", "b)", "c)", "d)", "e)"]; 
                                var string = '<tr><td style="font-size:18px; padding-top:2%">';
                                string += '<div id="Question:'+(key+1)+'" class="'+arr[0]+':'+(arr.length-2)+'">'+(key+1)+' - '+arr[1].substring(3)+'</div>';
                                for (var i = 2; i < arr.length; i++) {
                                string += '<input id="Alternative:'+(key+1)+':'+(i-1)+'" name="'+(key+1)+'" type="radio" value="'+arr[i].idAlternative+'"> '+letters[i-2]+' '+arr[i].content.substring(3); +'<br>';
                                };
                                string += '</td><td></tr>';
                                $('#'+table).append(string);

                        });    
                  $('#'+table).append('<input id="countQuestion" type="hidden" value="'+data.length+'" />');
                } 
            });
          }

function addResultQuiz(div,url,filter)
          {

             $.ajax({                                      
                url: url+'?filter='+filter,
                data: "",                  
                dataType: 'json',          
                success: function(data)    
                {
                  
                  var numCorrectAnswers = 0;
                  $.each(data, function(key, arr) {
                                
                                if(arr.Hit == 1)
                                {
                                  numCorrectAnswers++;
                                }
                                 
                                

                        });    
                  var string = numCorrectAnswers;
                                
                  $('#'+div).append(string);
                  
                } 
            });
          }


function editQuestion_Alternatives(enum1,alternatives,url,filter,questionid)
          {
            
             $.ajax({                                      
                url: url+'?filter='+filter+'&questionid='+questionid,
                data: "",                  
                dataType: 'json',          
                success: function(data)    
                { //alert(JSON.stringify(data));
                  $.each(data, function(key, arr) {

                                CKEDITOR.disableAutoInline = true;
                                CKEDITOR.config.htmlEncodeOutput = false;
                                CKEDITOR.config.entities = false;    

                                var string = '<div name="editenun1" id="editenun1" class="questionBox" contenteditable="true" >'+arr[1]+'</div>';
                                
                                $('#'+enum1).append(string);
                                CKEDITOR.inline( 'editenun1' ); 
                                
                                //string += '<div id="Question:'+(key+1)+'" class="'+arr[0]+':'+(arr.length-2)+'">'+(key+1)+' - '+arr[1].substring(3)+'</div>';
                                for (var i = 2; i < arr.length; i++) {
                                string = '<div id="alternative'+(i-1)+'" >';
                                string +=  '<div class="form-group" style="position:relative;left:5%"><label>Alternativa '+(i-1)+'</label></div>';
                                string += '<div name="editalter'+(i-1)+'" id="editalter'+(i-1)+'" class="alterBox" contenteditable="true" >'+arr[i].content+'</div>';
                                string += '</div>';
                                
                                $('#'+alternatives).append(string);

                                CKEDITOR.inline( 'editalter'+(i-1) );
                                //string += '<input id="Alternative:'+(key+1)+':'+(i-1)+'" name="'+(key+1)+'" type="radio" value="'+arr[i].idAlternative+'"> '+letters[i-2]+' '+arr[i].content.substring(3); +'<br>';
                                };
                                
                                for (var i = arr.length-1; i <= 6; i++) {
                                  string = '<div id="alternative'+(i)+'" style="display:none" >';
                                  string +=  '<div class="form-group" style="position:relative;left:5%"><label>Alternativa '+(i)+'</label></div>';
                                  string += '<div name="editalter'+(i)+'" id="editalter'+(i)+'" class="alterBox" contenteditable="true" ></div>';
                                  string += '</div>';
                                $('#'+alternatives).append(string);
                                CKEDITOR.inline( 'editalter'+(i) );
                                };
                                //string += '</td><td></tr>';
                                
                                

                                
                        });    
                
                
                
                

                

                } 

            });

                

      }


 function addQuestionFolders(table,url,filter,iduserte)
          {

             $.ajax({                                      
                url: url+'?filter='+filter+'&iduserte='+iduserte,
                data: "",                  
                dataType: 'json',          
                success: function(data)    
                { 
                  //console.log(JSON.stringify(data));
                  $.each(data, function(key, arr) {
                                //console.log(arr[1][0][0]);
                                
                                var string = getTree(arr,string,'',0,0,'none');
                                
                                

                                $('#'+table).append(string);

                        });    
                } 
            });
          }     


function getTree(array,string,level,root,child,display)
{
  string = '';
  
  for (var i = 0; i < array.length; i++) {

                                root = (i+1);
                                
                                level += "."+(root);
                                
                                string += '<div><label id="'+array[i].idQuestionFolder+'" style="position:relative; left:'+(level.length*3)+'%" ondblclick="showElementOnClick(\''+level+'\')" >Pasta '+level+' : '+array[i].FolderName+'';
                                

                                
                                string += '<a href="#" type="button"  data-toggle="modal" data-target="#mod3"  onclick="openDeleteQuestionModal('+"'"+'mod3'+"'"+','+array[i].idQuestionFolder+')">';
                                string += '<label class="row custom-icon"><i class="glyphicon glyphicon-minus" style="position:relative; top:50%; left:10%; padding-left:50%" title="Remover Pasta"></i>';
                                string += '</label></a>';

                                
                                string += '<a href="#" type="button"  data-toggle="modal" data-target="#mod2"  >';
                                string += '<label class="row custom-icon"><i class="glyphicon glyphicon-plus" style="position:relative; top:50%; left:170%" title="Adicionar Pasta"></i>';
                                string += '</label></a></label></div><div id='+level+' style="display:'+display+'">';

                                if(array[i]['Content'][0])
                                {
                                  string += '<label id="'+array[i]['Content'][0].idQuizQuestion+'" style="position:relative;left:'+((3)+level.length*3)+'%" draggable="true" ondragstart="drag(event)" >'+array[i]['Content'][0].QuestionWording+'</label>'
                                  
                                }
                                
                                if(array[i][0])
                                {
                                
                                  string += getTree(array[i][0],string,level,child,child,'none')+'</div>';
                                  level = level.split('.').slice(0,level.split('.').length-1).toString().replace(/,/g, ".");
                                } else{
                                  string += '</div>';
                                  
                                  
                                level = level.split('.').slice(0,level.split('.').length-2).toString().replace(/,/g, ".");

                                

                                }
                                

                                };
return string;

}


function generateQuizQRCode(element,link)
{
        document.getElementById("qrcode").innerHTML = "";
        new QRCode(document.getElementById("qrcode"), link+'?idquiz='+element.id);
      
}

