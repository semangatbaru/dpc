<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_awal extends CI_Model{
	 
     private $_tableB = "kategori";

	 public function __construct()
    {
        $this->load->database();
    }

    
   
   public function terbaru(){
        // CREATE VIEW terbaru AS SELECT * FROM `berita` ORDER BY tanggal DESC
        
          $this->db->select('*');
        $this->db->from('terbaru');
        
        $query = $this->db->get();
        return $query;
   }
   public function terbaruall(){
     // CREATE VIEW terbaru AS SELECT * FROM `berita` ORDER BY tanggal DESC
     
          $this->db->select('*');
          $this->db->from('terbaruall');
     
          $query = $this->db->get();
          return $query;
     }
     public function baru()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
          $this->db->select('*');
          $this->db->from('terbaru');
        
          $query = $this->db->get();
          return $query;
   } 
   
   public function politik1(){
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
          $this->db->select('*');
          $this->db->from('politik1');
        
          $query = $this->db->get();
          return $query;
   }
   public function politik3(){
     // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
     
          $this->db->select('*');
          $this->db->from('politik3');
          $this->db->order_by('id_berita', 'desc');
          
          
          $query = $this->db->get();
          return $query;
     }
     public function politikall(){
          $this->db->select('*');
          $this->db->from('politikall');
          
          $query = $this->db->get();
          return $query;
     }
     public function keislaman1(){
          // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
          
            $this->db->select('*');
            $this->db->from('keislaman1');
          
            $query = $this->db->get();
            return $query;
     }
     public function keislaman3(){
          // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
     
          $this->db->select('*');
          $this->db->from('keislaman3');
          
          $query = $this->db->get();
          return $query;
     }
     public function keislamanall(){
          $this->db->select('*');
          $this->db->from('keislamanall');
          
          $query = $this->db->get();
          return $query;
     }
   
     public function analisa1(){
          // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
          
            $this->db->select('*');
            $this->db->from('analisa1');
          
            $query = $this->db->get();
            return $query;
     }
     public function analisa3(){
          // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
     
          $this->db->select('*');
          $this->db->from('analisa3');
          
          $query = $this->db->get();
          return $query;
     }
     public function analisaall(){
          $this->db->select('*');
          $this->db->from('analisaall');
          
          $query = $this->db->get();
          return $query;
     }
   
   public function berita1(){
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
          $this->db->select('*');
          $this->db->from('berita1');
        
          $query = $this->db->get();
          return $query;
   }
   public function berita3(){
     // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
     
          $this->db->select('*');
          $this->db->from('berita3');
          
          $query = $this->db->get();
          return $query;
     }
     public function beritaall(){
          $this->db->select('*');
          $this->db->from('beritaall');
          
          $query = $this->db->get();
          return $query;
     }
     
   
   public function biografi1(){
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        
          $this->db->select('*');
          $this->db->from('biografi1');
        
          $query = $this->db->get();
          return $query;
   }
   public function biografi3(){
     // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
     
          $this->db->select('*');
          $this->db->from('biografi3');
          
          $query = $this->db->get();
          return $query;
     }
     public function biografiall(){
          $this->db->select('*');
          $this->db->from('biografiall');
          
          $query = $this->db->get();
          return $query;
     }
   
     public function opini1(){
          // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
          
            $this->db->select('*');
            $this->db->from('opini1');
          
            $query = $this->db->get();
            return $query;
     }
     public function opini3(){
       // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
       
            $this->db->select('*');
            $this->db->from('opini3');
            
            $query = $this->db->get();
            return $query;
       }
       public function opiniall(){
            $this->db->select('*');
            $this->db->from('opiniall');
            
            $query = $this->db->get();
            return $query;
       }
       
   
   public function sosial1(){
     // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
     
       $this->db->select('*');
       $this->db->from('sosial1');
     
       $query = $this->db->get();
       return $query;
}
public function sosial3(){
  // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
  
       $this->db->select('*');
       $this->db->from('sosial3');
       
       $query = $this->db->get();
       return $query;
  }
  public function sosialall(){
       $this->db->select('*');
       $this->db->from('sosialall');
       
       $query = $this->db->get();
       return $query;
  }
  
   
  public function ekonomi1(){
     // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
     
       $this->db->select('*');
       $this->db->from('ekonomi1');
     
       $query = $this->db->get();
       return $query;
}
public function ekonomi(){
  // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
  
       $this->db->select('*');
       $this->db->from('ekonomi');
       
       $query = $this->db->get();
       return $query;
  }
  public function ekonomiall(){
       $this->db->select('*');
       $this->db->from('ekonomiall');
       
       $query = $this->db->get();
       return $query;
  }
       
   
  
    public function ambil_data()
    {
         
         $this->db->select('berita.*, kategori.nama_kategori');
         $this->db->from('berita');
         $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori','left');
         $this->db->order_by('tanggal', 'ASC');
         $query = $this->db->get();
         return $query;
     }

    public function ambil_kategori()
   {
    return $this->db->get('kategori');
    }

    function detail($id_berita)
        {
                $this->db->select('*');
                $this->db->where('id_berita', $id_berita);
                $query = $this->db->get('berita');
                return $query->result_array();
        }

     public function getBerita($limit, $start)
     {
          return $this->db->get('berita', $limit, $start);
     }

}
