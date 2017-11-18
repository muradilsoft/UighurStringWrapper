<?php
//by Muradilsoft
//2017/11/18
//uighur string for PHP GD
namespace Muradilsoft;
class UyStringWrapper{
	private $originString="";
	private $finalString="";
	private $frontLetter="-1";
	private $nowLetter="-1";
	private $nextLetter="-1";
	private $alphaBet=[
		['ئ',["front"=>[0,""],"next"=>[1,"ﺋ"],"alone"=>[0,""],"both"=>[1,"ﺌ"]]],
		['ا',["front"=>[1,"ﺎ"],"next"=>[0,""],"alone"=>[1,"ﺍ"],"both"=>[0,""]]],
		['ە',["front"=>[1,"ﻪ"],"next"=>[0,""],"alone"=>[1,"ە"],"both"=>[0,""]]],
		['ب',["front"=>[1,"ﺐ"],"next"=>[1,"ﺑ"],"alone"=>[1,"ﺏ"],"both"=>[1,"ﺒ"]]],
		['پ',["front"=>[1,"ﭗ"],"next"=>[1,"ﭘ"],"alone"=>[1,"ﭖ"],"both"=>[1,"ﭙ"]]],
		['ت',["front"=>[1,"ﺖ"],"next"=>[1,"ﺗ"],"alone"=>[1,"ﺕ"],"both"=>[1,"ﺘ"]]],
		['ج',["front"=>[1,"ﺞ"],"next"=>[1,"ﺟ"],"alone"=>[1,"ﺝ"],"both"=>[1,"ﺠ"]]],
		['چ',["front"=>[1,"ﭻ"],"next"=>[1,"ﭼ"],"alone"=>[1,"ﭺ"],"both"=>[1,"ﭽ"]]],
		['خ',["front"=>[1,"ﺦ"],"next"=>[1,"ﺧ"],"alone"=>[1,"ﺥ"],"both"=>[1,"ﺨ"]]],
		['د',["front"=>[1,"ﺪ"],"next"=>[0,""],"alone"=>[1,"ﺩ"],"both"=>[0,""]]],
		['ر',["front"=>[1,"ﺮ"],"next"=>[0,""],"alone"=>[1,"ﺭ"],"both"=>[0,""]]],
		['ز',["front"=>[1,"ﺰ"],"next"=>[0,""],"alone"=>[1,"ﺯ"],"both"=>[0,""]]],
		['ژ',["front"=>[1,"ﮋ"],"next"=>[0,""],"alone"=>[1,"ﮊ"],"both"=>[0,""]]],
		['ق',["front"=>[1,"ﻖ"],"next"=>[1,"ﻗ"],"alone"=>[1,"ﻕ"],"both"=>[1,"ﻘ"]]],
		['ك',["front"=>[1,"ﻚ"],"next"=>[1,"ﻛ"],"alone"=>[1,"ﻙ"],"both"=>[1,"ﻜ"]]],
		['گ',["front"=>[1,"ﮓ"],"next"=>[1,"ﮔ"],"alone"=>[1,"ﮒ"],"both"=>[1,"ﮕ"]]],
		['ڭ',["front"=>[1,"ﯔ"],"next"=>[1,"ﯕ"],"alone"=>[1,"ﯓ"],"both"=>[1,"ﯖ"]]],
		['ل',["front"=>[1,"ﻞ"],"next"=>[1,"ﻟ"],"alone"=>[1,"ﻝ"],"both"=>[1,"ﻠ"]]],
		['م',["front"=>[1,"ﻢ"],"next"=>[1,"ﻣ"],"alone"=>[1,"ﻡ"],"both"=>[1,"ﻤ"]]],
		['ن',["front"=>[1,"ﻦ"],"next"=>[1,"ﻧ"],"alone"=>[1,"ﻥ"],"both"=>[1,"ﻨ"]]],
		['ي',["front"=>[1,"ﻲ"],"next"=>[1,"ﻳ"],"alone"=>[1,"ﻱ"],"both"=>[1,"ﻴ"]]],
		['غ',["front"=>[1,"ﻎ"],"next"=>[1,"ﻏ"],"alone"=>[1,"ﻍ"],"both"=>[1,"ﻐ"]]],
		['ف',["front"=>[1,"ﻒ"],"next"=>[1,"ﻓ"],"alone"=>[1,"ﻑ"],"both"=>[1,"ﻔ"]]],
		['س',["front"=>[1,"ﺲ"],"next"=>[1,"ﺳ"],"alone"=>[1,"ﺱ"],"both"=>[1,"ﺴ"]]],
		['ش',["front"=>[1,"ﺶ"],"next"=>[1,"ﺷ"],"alone"=>[1,"ﺵ"],"both"=>[1,"ﺸ"]]],
		['ې',["front"=>[1,"ﯥ"],"next"=>[1,"ﯦ"],"alone"=>[1,"ﯤ"],"both"=>[1,"ﯧ"]]],
		['ى',["front"=>[1,"ﻰ"],"next"=>[1,"ﯨ"],"alone"=>[1,"ﻯ"],"both"=>[1,"ﯩ"]]],
		['و',["front"=>[1,"ﻮ"],"next"=>[0,""],"alone"=>[1,"ﻭ"],"both"=>[0,""]]],
		['ۇ',["front"=>[1,"ﯘ"],"next"=>[0,""],"alone"=>[1,"ﯗ"],"both"=>[0,""]]],
		['ۆ',["front"=>[1,"ﯚ"],"next"=>[0,""],"alone"=>[1,"ﯙ"],"both"=>[0,""]]],
		['ۈ',["front"=>[1,"ﯜ"],"next"=>[0,""],"alone"=>[1,"ﯛ"],"both"=>[0,""]]],
		['ۋ',["front"=>[1,"ﯟ"],"next"=>[0,""],"alone"=>[1,"ﯞ"],"both"=>[0,""]]],
		['ھ',["front"=>[0,""],"next"=>[1,"ﮬ"],"alone"=>[0,""],"both"=>[1,"ﮫ"]]],
		[' ',["front"=>[0,""],"next"=>[0,""],"alone"=>[0,""],"both"=>[0,""]]],
		['-1',["front"=>[0,""],"next"=>[0,""],"alone"=>[0,""],"both"=>[0,""]]],
	];
	public function getStringForGD($str){
		$this->originString=$str;
		$letter_0="";
		$nowLetter="";
		$originStringLength=strlen($this->originString);
		for ($i=0; $i <$originStringLength; $i++) {
			//echo $i."<br>";
			if($this->originString[$i]==" "){
				$nowLetter=" ";
			}else{
				if($letter_0==""){
					$letter_0=$this->originString[$i];
				}else{
					$nowLetter=$letter_0.$this->originString[$i];
					$letter_0="";
				}
			}
			if($nowLetter!=""){
				$this->pushToQueue($nowLetter);
				$this->checkJointed();
				//echo $nowLetter."<br />";
				$nowLetter="";
			}
		}
		if($i>1){
			$this->pushToQueue("-1");
			$this->checkJointed();
		}
		return $this->finalString;

	}
	private function pushToQueue($latter){
		$this->frontLetter=$this->nowLetter;
		$this->nowLetter=$this->nextLetter;
		$this->nextLetter=$latter;
	}
	private function checkJointed(){
		$tempNow=$this->getLeterInfo($this->nowLetter);
		$tempFront=$this->getLeterInfo($this->frontLetter);
		$tempNext=$this->getLeterInfo($this->nextLetter);
		$tempNow=$tempNow[1];
		$tempFront=$tempFront[1];
		$tempNext=$tempNext[1];
		if($tempNow['front'][0]==1 && $tempFront['next'][0]==1 && $tempNow['next'][0]==1 && $tempNext['front'][0]==1){
			$this->finalString=$tempNow['both'][1].$this->finalString;
		}
		if($tempNow['front'][0]==1 && $tempNow['next'][0]==0 && $tempFront['next'][0]==1){
			$this->finalString=$tempNow['front'][1].$this->finalString;
		}
		if($tempFront['next'][0]==0 && $tempNow['next'][0]==1 && $tempNext['front'][0]==1){
			$this->finalString=$tempNow['next'][1].$this->finalString;
		}
		if($tempNow['alone'][0]==1 && $tempFront['next'][0]==0 && $tempNext['front'][0]==0 ||
			$tempNow['alone'][0]==1 && $tempFront['next'][0]==0 && $tempNow['next'][0]==0
			){
			$this->finalString=$tempNow['alone'][1].$this->finalString;
		}
		if($tempNow==" "){
			$this->finalString=" ".$this->finalString;
		}
	}
	private function getLeterInfo($leter){
		for ($i=0; $i <count($this->alphaBet) ; $i++) {
			if($this->alphaBet[$i][0]==$leter){
				return $this->alphaBet[$i];
			}
		}
		return 0;
	}
}
?>