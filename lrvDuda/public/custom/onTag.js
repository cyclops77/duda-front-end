
const tagContainer = document.querySelector('.tag-container');
const input = document.querySelector('.tag-container input');

let tags = [];
let babs = [];

function createTag(label) {
  var sl = label;
  var slug = sl.replace(/\s/g,"-");
  const div = document.createElement('div');
  div.setAttribute('class', 'tag');
  const span = document.createElement('span');
  span.innerHTML = label;
  const closeIcon = document.createElement('i');
  closeIcon.innerHTML = 'close';
  closeIcon.setAttribute('class', 'material-icons tag-icon');
  closeIcon.setAttribute('data-item', label);
  closeIcon.setAttribute('id', slug)
  div.appendChild(span);
  div.appendChild(closeIcon);
  return div;
}

function clearTags() {
  document.querySelectorAll('.tag').forEach(tag => {
    
    tag.parentElement.removeChild(tag);
  });
}
document.addEventListener('click', (e) => {
  console.log(e.target.tagName);
  if (e.target.className === 'tag-icon') {
    const tagLabel = e.target.getAttribute('data-item');
    const index = tags.indexOf(tagLabel);
    // alert();
    var idZ = e.target.getAttribute('id');
    // alert(idZ);
    $(".op #"+idZ).remove();
    tags = [...tags.slice(0, index), ...tags.slice(index+1)];
    addTags();    
  }
})
function addTags() {
  clearTags();
  tags.slice().reverse().forEach(tag => {
    tagContainer.prepend(createTag(tag));
  });
}

input.addEventListener('keyup', (e) => {
    var x = document.getElementById("inputan").value;
    // var y = document.getElementById("inputan_field")
    if (e.key === 'Enter') {
      if (x=='') {
        var errormsg = 'Warning';
        var errorbody = 'Silahkan Isi Pesan Tag Terlebih dahulu !!!'; 
        $('#alert-modal').modal('show');
        $('#modal-message').html(errormsg);
        $('#error-body').html(errorbody);
      }else{
        if($(".tag").length > 4){
            var errormsg = 'Warning';
            var errorbody = 'Anda hanya dapat mengisi maksimal 5 tags !!!'; 
            $('#alert-modal').modal('show');
            $('#modal-message').html(errormsg);
            $('#error-body').html(errorbody);
            input.value = '';
        }else if(input.value == ($(".tag span").html())){
            alert("PODO");
        }
        else{
          var bfr = input.value;
          var slg = bfr.replace(/\s/g,"-");
            // var slugged = 
            $("#tagged").append(
              '<div class="op"><input style="display: none" type="text" value="'+input.value+'" id="'+slg+'" class="form-control customHH"></div>');
            e.target.value.split(',').forEach(tag => {
            tags.push(tag);  
           });
           addTags();
           input.value = '';
      }}
    }
});


input.focus();