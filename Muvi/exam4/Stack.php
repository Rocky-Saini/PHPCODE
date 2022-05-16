<?php
class CreateStack {
  public $top;
  public $stack = array();

  function __construct() {
    $this->top = -1;
  }
 
  public function isEmpty() {
    if($this->top == -1) {
      echo "Stack is empty. \n";
      echo "<br />";
    } else {
      echo "Stack is not empty. \n";
      echo "<br />";
    }
  }

  //create a function to return size of the stack 
  public function size() { 
     return $this->top+1;
  }

  //create a function to add new element 
  public function push($x) {
    $this->stack[++$this->top] = $x;
    echo $x." is added into the stack. \n"; 
    echo "<br />";
  }

  //create a function to delete top element   
  public function pop() {
    if($this->top < 0){
      echo "Stack is empty. \n";
      echo "<br />";
    } else {
      $x = $this->stack[$this->top--];
      echo $x." is deleted from the stack. \n";
      echo "<br />";
    }    
  }

  public function topElement() {
    if($this->top < 0) {
      echo "Stack is empty. \n";
      echo "<br />";
    } else {
      return $this->stack[$this->top];
    }
  }
}

$MyStack = new CreateStack();
$MyStack->push(10);
$MyStack->push(20);
$MyStack->push(30);
$MyStack->push(40);

$MyStack->pop();
$MyStack->isEmpty();
?>