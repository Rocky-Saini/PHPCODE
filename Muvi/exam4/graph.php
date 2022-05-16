<?php
class Graph
{
  public function add_edge($u,$v,$data=null)
  {
    assert($this->sanity_check());
    assert($u != $v);

    if ($this->has_edge($u,$v))
      return;

    if (!$this->has_vertex($u))
      $this->add_vertex($u);
    if (!$this->has_vertex($v))
      $this->add_vertex($v);

    assert(array_key_exists($u,$this->adjacency_list));
    assert(array_key_exists($v,$this->adjacency_list));

    $this->adjacency_list[$u][$v] = $data;
    $this->adjacency_list[$v][$u] = $data;
    $this->edge_count += 2;

    assert($this->has_edge($u,$v));

    assert($this->sanity_check());
  }

  public function has_edge($u,$v)
  {
    assert($this->sanity_check());

    if (!$this->has_vertex($u))
      return false;
    if (!$this->has_vertex($v))
      return false;

    assert(array_key_exists($u,$this->adjacency_list));
    assert(array_key_exists($v,$this->adjacency_list));
    
    $result = array_key_exists($v,$this->adjacency_list[$u]);

    assert($result == array_key_exists($u,$this->adjacency_list[$v]));

    return $result;
  }

  public function remove_edge($u,$v)
  {
    assert($this->sanity_check());

    if (!$this->has_edge($u,$v))
      return null;
    
    assert(array_key_exists($u,$this->adjacency_list));
    assert(array_key_exists($v,$this->adjacency_list));
    assert(array_key_exists($v,$this->adjacency_list[$u]));
    assert(array_key_exists($u,$this->adjacency_list[$v]));

    $data = $this->adjacency_list[$u][$v];

    unset($this->adjacency_list[$u][$v]);
    unset($this->adjacency_list[$v][$u]);
    
    $this->edge_count -= 2;

    assert($this->sanity_check());

    return $data;
  }

  public function get_edge_data($u,$v)
  {
    assert($this->sanity_check());
    
    if (!$this->has_edge($u,$v))
      return null;

    assert(array_key_exists($u,$this->adjacency_list));
    assert(array_key_exists($v,$this->adjacency_list[$u]));
    
    
    return $this->adjacency_list[$u][$v]; 
  }

  public function add_vertex($u,$data=null)
  {
    assert(!$this->has_vertex($u));

    $this->vertex_data[$u] = $data;
   
    $this->adjacency_list[$u] = array();

    assert($this->has_vertex($u));
    assert($this->sanity_check());
  }

  public function has_vertex($u)
  {
    assert($this->sanity_check());
    assert(array_key_exists($u,$this->vertex_data) == array_key_exists($u,$this->adjacency_list));
    return array_key_exists($u,$this->vertex_data);
  }

  public function get_vertex_data($u)
  {
    assert($this->sanity_check());

    if (!array_key_exists($u,$this->vertex_data))
      return null;

    return $this->vertex_data[$u];
  }
  
  public function count_vertex_edges($u)
  {
    assert($this->sanity_check());

    if (!$this->has_vertex($u))
      return 0;
  
    assert (array_key_exists($u,$this->adjacency_list));
    
    return count($this->adjacency_list[$u]);
  }

  public function get_edge_vertices($u,$with_data=false)
  {
    assert($this->sanity_check());
    
    if (!array_key_exists($u,$this->adjacency_list))
      return array();

    $result = array();

    if ($with_data) {
      foreach( $this->adjacency_list[$u] as $v=>$data)
      {
        $result[$v] = $data;
      }
    } else {

      foreach( $this->adjacency_list[$u] as $v=>$data)
      {
        array_push($result, $v);
      }
    }

    return $result;
  }

  public function remove_vertex($u)
  {
    assert($this->sanity_check());

    if (!$this->has_vertex($u)){
      //Sanity.
      assert(!array_key_exists($u,$this->vertex_data));
      assert(!array_key_exists($u,$this->adjacency_list));
      return null;
    }

    foreach ($this->get_edge_vertices($u) as $v)
    {
      $this->remove_edge($u,$v);
    }

    assert($this->count_vertex_edges($u) == 0);

    assert(array_key_exists($u,$this->vertex_data));
    assert(array_key_exists($u,$this->adjacency_list));
    
    $data = $this->vertex_data[$u];

    unset($this->vertex_data[$u]);
    unset($this->adjacency_list[$u]);
    
    assert($this->sanity_check());

    return $data;
  }

  public function get_vertex_count()
  {
    assert($this->sanity_check());
    return count($this->vertex_data);
  }
  public function get_edge_count()
  {
    assert($this->sanity_check());
    
    //edge_count counts both (u,v) and (v,u)
    return $this->edge_count/2;
  }

  public function get_vertex_list($with_data=false)
  {
    $result = array();
    
    if ($with_data)
      foreach ($this->vertex_data as $u=>$data)
        $result[$u]=$data;
    else
      foreach ($this->vertex_data as $u=>$data)
        array_push($result,$u);
    
    return $result;
  }


  public function edge_list_str_array($ordered=true)
  {
    $result_strings = array();
    foreach($this->vertex_data as $u=>$udata)
    {
      foreach($this->adjacency_list[$u] as $v=>$uv_data)
      {
        if (!$ordered || ($u < $v))
          array_push($result_strings, '('.$u.','.$v.')');
      }
    }
    return $result_strings;
  }

  public function sanity_check()
  {
    if (count($this->vertex_data) != count($this->adjacency_list))
      return false;

    $edge_count = 0;

    foreach ($this->vertex_data as $v=>$data)
    {

      if (!array_key_exists($v,$this->adjacency_list))
        return false;

      $edge_count += count($this->adjacency_list[$v]);
    }

    if ($edge_count != $this->edge_count)
      return false;

    if (($this->edge_count % 2) != 0)
      return false;

    return true;
  }

  private $adjacency_list = array();

  private $vertex_data = array();

  private $edge_count = 0;
}

$G = new Graph();

for ($i=0; $i<5; ++$i)
{
  $G->add_vertex($i);
}

for ($i=5; $i<10; ++$i)
{
  $G->add_edge($i,$i-5);
}

print 'V: {'.join(', ',$G->get_vertex_list())."}\n";
print 'E: {'.join(', ',$G->edge_list_str_array())."}\n";
echo "<br />";
$G->remove_vertex(1);
echo "<br />";
print 'V: {'.join(', ',$G->get_vertex_list())."}\n";
print 'E: {'.join(', ',$G->edge_list_str_array())."}\n";
echo "<br />";
$G->remove_vertex(1);
echo "<br />";
print 'V: {'.join(', ',$G->get_vertex_list())."}\n";
print 'E: {'.join(', ',$G->edge_list_str_array())."}\n";
?>