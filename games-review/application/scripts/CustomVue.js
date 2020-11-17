var app = new Vue({
    // Add the id here.
    el: '#app',
    data: {
    // Create your data here.
    heading: 'Vue js is working!',
    comments: [],
    },    

    created(){
      this.getList()
    },
    methods: {
    //    Add your methods here.  
      getList: function(){

        let thisID = $("#GameID").text();

        $.get('http://localhost/games-review/index.php/Home/comments', function(data){

          for(let i=0; i < data.length; i++){
            if(thisID == data[i].ReviewID){
              app.comments.push(data[i]);
            }
          }//this function getsw comments for each game by using the for loop 
        });
      },
      
      setList: function(){

        var postData = {'UserComment' : $('#commentArea').val() }

        $.post('http://localhost/games-review/index.php/Home/postComments', postData)
       

        this.hideList();
        setTimeout(this.getList, 200);

      },// this function adds the comments 

      hideList: function(){

        this.comments = []

      },


    }
    
});