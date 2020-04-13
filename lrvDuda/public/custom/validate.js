
 
    $('input:radio[name="layanan"]').on('change',function(e){
        var kategoriButton = ('<div id="appended" class="form-group your-name">'+
        '<div class="col-xl-12 row pt-25 pb-100 custom-ln-border">'+
        '<h3 class="text-center text-custom mb-3">Silahkan Pilih Kategori Layanan</h3>'+
        '<div class="row ml-5 mr-5" id="kategori">'+
        '</div>'+
        '</div>'+
        '</div>');

        console.log(e);
        var id_layanan = e.target.value;
        if (id_layanan && $("#appended").length == 0) {
            $('#tujuan').append(kategoriButton);
        }
        $.get('/json-kategori?layanan_id=' + id_layanan, function(data){
          $('#kategori').empty();
        $.each(data, function(index, kategoriObj){
        var layanan = (
            '<div class="mx-auto">'+
                '<input type="radio" name="qwqw"'+
                ' id="kategori'+kategoriObj.id+'"'+
                'class="custom-kn-radio check" '+
                'value="'+kategoriObj.id+'">'+
                '<label for="kategori'+kategoriObj.id+'"'+
                    ' class="custom-kn-label"><span'+
                    ' class="custom-kn-span">'+kategoriObj.name+''+
                    '</span>'+
                '</label>'+
            '</div>'
            );
          $('#kategori').append(layanan);  
        

        // PRODUK
      $('input:radio[name=qwqw]').on('change',function(ae){
        var produkButton = ('<div id="appended-produk" class="form-group your-name">'+
        '<div class="col-xl-12 row pt-25 pb-100 custom-ln-border">'+
        '<h3 class="text-center text-custom mb-3">Silahkan Pilih Produk Layanan</h3>'+
        '<div class="row ml-5 mr-5" id="produk">'+
        '</div>'+
        '</div>'+
        '</div>');

        console.log(ae);
        var id_kategori = ae.target.value;
        
        $.get('/json-produk?kategori_id=' + id_kategori, function(data){
          $('#produk').empty();
        $.each(data, function(index, produkObj){
            if (produkObj.id == 0) {
                $("#appended-produk").remove();
            }else{
                if (id_kategori && $("#appended-produk").length == 0) {
                    $('#tujuan').append(produkButton);
                }
                var produk = (
                    '<div class="mx-auto">'+
                    '<input type="radio" name="produk" id="produk'+produkObj.id+'" class="custom-kn-radio" value="'+kategoriObj.id+'">'+
                    '<label for="produk'+produkObj.id+'" class="custom-kn-label">'+
                    '<span class="custom-kn-span">'+produkObj.name+'</span>'+
                    '</label>'+
                    '</div>'
                ); 
              $('#produk').append(produk);  
            }
            
           
        })
        });
    });
        })
        });
    });


        
            
        
    
 // $('input:radio[name="qwqw"]').on('change',function(e){
 //    var kategoriButton = ('<div id="qw" class="form-group your-name">'+
 //        '<div class="col-xl-12 row pt-25 pb-100 custom-ln-border">'+
 //        '<h3 class="text-center text-custom mb-3">Silahkan Pilih Kategori Layanan</h3>'+
 //        '<div class="row ml-5 mr-5" id="kategori">'+
 //        '</div>'+
 //        '</div>'+
 //        '</div>');
 //        console.log(e);
 //        var id_layanan = e.target.value;
 //        if (id_layanan && $("#qw").length == 0) {
 //            $('#tujuan').append(kategoriButton);
 //        }
 //    });

   

