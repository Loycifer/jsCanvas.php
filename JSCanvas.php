<?php

/*
  Skipped methods:
 * addHitRegion()
 * asyncDrawXULElement()
 * clearHitRegioins()
 * createLinearHradient()
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

    public function drawImage($image, $sx, $sy, $sWidth = null, $sHeight = null, $dx = null, $dy = null, $dWidth = null, $dHeight = null) {
	if (!is_string($image)) {
	    throw new Exception('JavaScript variable name of Image object must be string.');
	}
	if ($sWidth === null) {
	    $command = "drawImage($image,$sx,$sy)";
	} elseif ($dx === null) {
	    $command = "drawImage($image,$sx,$sy,$sWidth,$sHeight)";
	} else {
	    $command = "drawImage($image,$sx,$sy,$sWidth,$sHeight,$dx,$dy,$dWidth,$dHeight)";
	}
	$this->parseCommand($command);
    }

    public function fill($path = null, $fillRule = null) {
	if ($path === null) {
	    $command = "fill()";
	} elseif ($fillRule === null) {
	    $command = "fill(\"$path\")";
	} else {
	    if (!is_string($path)) {
		throw new Exception('JavaScript variable name of Path2D object must be string.');
	    }
	    $command = "fill($path,\"$fillRule\")";
	}
	$this->parseCommand($command);
    }

    public function fillRect($x, $y, $width, $height) {
	$command = "fillRect($x, $y, $width, $height)";
	$this->parseCommand($command);
    }

    public function lineTo($x, $y) {
	$command = "lineTo($x,$y)";
	$this->parseCommand($command);
    }

    public function moveTo($x, $y) {
	$command = "moveTo($x,$y)";
	$this->parseCommand($command);
    }

    public function rect($x, $y, $width, $height) {
	$command = "rect($x,$y,$width,$height)";
	$this->parseCommand($command);
    }

    public function restore() {
	$command = "restore()";
	$this->parseCommand($command);
    }

    public function rotate($angle) {
	$command = "rotate($angle)";
	$this->parseCommand($command);
    }

    public function save() {
	$command = "save()";
	$this->parseCommand($command);
    }

    public function scale($x, $y) {
	$command = "scale($x,$y)";
	$this->parseCommand($command);
    }

    public function setTransform($a, $b, $c, $d, $e, $f) {
	$command = "setTransform($a, $b, $c, $d, $e, $f)";
	$this->parseCommand($command);
    }

    public function stroke($path = null) {
	if ($path === null) {
	    $command = "stroke()";
	} else {
	    if (!is_string($path)) {
		throw new Exception('JavaScript variable name of Path2D object must be string.');
	    }
	    $command = "stroke($path)";
	}
	$this->parseCommand($command);
    }

    public function strokeRect($x, $y, $width, $height) {
	$command = "strokeRect($x,$y,$width,$height)";
	$this->parseCommand($command);
    }

    public function transform($a, $b, $c, $d, $e, $f) {
	$command = "transform($a, $b, $c, $d, $e, $f)";
	$this->parseCommand($command);
    }

    public function translate($x, $y) {
	$command = "translate($x,$y)";
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
