const app = new Vue({
    el:'#root',
    data:{
             prova:'ciao',
             dischi:[],
             genere:['all'],
             cerca:'',
             logo:'https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png'

    },
    methods:{
       ricercaGeneri:function(card){
            if(this.cerca=='all'||card.genere==this.cerca){
                return true
            } else{
                return false
            }
       }
    },
    mounted(){
        axios
        .get('http://localhost/dischi-php/database.php')
        .then((disco)=>{
               
           console.log(disco.data);
           this.dischi=disco.data
     
            
           this.dischi.forEach(element => {
          

                if(!this.genere.includes(element.genere)){
                    this.genere.push(element.genere)
                }

              
           });
              
        })
        console.log(this.dischi);

        console.log(this.genere);
        
    }
})