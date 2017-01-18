<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JSCanvas
 *
 * @author Loy Clements
 */
class JSCanvas {

    //put your code here
    private $commandStack = [];
    private $canvasCtxName = "ctx";

    public function setCtxName($name) {
	$this->canvasCtxName = $name;
    }

    private function parseCommand($command) {
	echo $this->canvasCtxName . "." . $command . ";\n";
    }

    public function arc($x, $y, $radius, $startAngle, $endAngle, $anticlockwise = false) {
	$acstring = $anticlockwise ? "true" : "false";
	$command = "arc($x,$y,$radius,$startAngle,$endAngle,$acstring)";
	$this->parseCommand($command);
    }

    public function arcTo($x1, $y1, $x2, $y2, $radius) {
	$command = "arcTo($x1, $y1, $x2, $y2, $radius)";
	$this->parseCommand($command);
    }

    public function beginPath() {
	$command = "beginPath()";
	$this->parseCommand($command);
    }

    public function bezierCurveTo($cp1x, $cp1y, $cp2x, $cp2y, $x, $y) {
	$command = "bezierCurveTo($cp1x, $cp1y, $cp2x, $cp2y, $x, $y)";
	$this->parseCommand($command);
    }

    public function clearRect($x, $y, $width, $height) {
	$command = "clearRect($x,$y,$width,$height)";
	$this->parseCommand($command);
    }

    public function clip($path = null, $fillRule = null) {
	if ($path === null) {
	    $command = "clip()";
	} elseif ($fillRule === null) {
	    $command = "clip(\"$path\")";
	} else {
	    if (!is_string($path)) {
		throw new Exception('JavaScript variable name of Path2D object must be string.');
	    }
	    $command = "clip($path,\"$fillRule\")";
	}
	$this->parseCommand($command);
    }

    public function closePath() {
	$command = "closePath()";
	$this->parseCommand($command);
    }

    /**
      public function __set($name, $value)
      {
      echo "Setting '$name' to '$value'\n";
      $this->data[$name] = $value;
      }

      public function __get($name)
      {
      echo "Getting '$name'\n";
      if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
      }

      $trace = debug_backtrace();
      trigger_error(
      'Undefined property via __get(): ' . $name .
      ' in ' . $trace[0]['file'] .
      ' on line ' . $trace[0]['line'],
      E_USER_NOTICE);
      return null;
      }
     * */
}
