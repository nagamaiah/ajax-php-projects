var myObj = 
{
    init:function()
    {
        var that = this;
        this.load_country();
        window.onload=function(){
                    document.getElementById('country').addEventListener('change',function()
                    {
                        that.load_state(this.value);
                    });

                    document.getElementById('state').addEventListener('change',function()
                    {
                        that.load_city(this.value);
                    });
        }
    },
    load_country:function()
    {
        var xhr = new XMLHttpRequest();
        xhr.open('GET','http://localhost/ajax_countries/get_all_countries.php',true);
        xhr.onload = function()
        {
            var countries = JSON.parse(xhr.responseText);
            countries.forEach(function(value){
                var op = document.createElement('option');
                op.innerText = value.name;
                op.setAttribute('value',value.id);
                document.getElementById('country').appendChild(op);
            });
        }
        xhr.send();
    },
    load_state:function(id)
    {

        document.getElementById('state').innerHTML = '';
        var xhr = new XMLHttpRequest();
        xhr.open('GET','http://localhost/ajax_countries/get_state.php?country_id='+id,true);
        xhr.onload = function()
        {
            var countries = JSON.parse(xhr.responseText);
            countries.forEach(function(value)
            {
                var op = document.createElement('option');
                op.innerText = value.name;
                op.setAttribute('value',value.id);
                document.getElementById('state').appendChild(op);
            });
        }
        xhr.send();
    },
    load_city:function(id)
    {
        document.getElementById('city').innerHTML = '';
        var xhr = new XMLHttpRequest();
        xhr.open('GET','http://localhost/ajax_countries/get_city.php?state_id='+id, true);
        xhr.onload = function()
        {
            var countries = JSON.parse(xhr.responseText);
            countries.forEach(function(value){
                var op = document.createElement('option');
                op.innerText = value.name;
                op.setAttribute('value',value.id);
                document.getElementById('city').appendChild(op);
            });
        }
        xhr.send();

    }

}

myObj.init();