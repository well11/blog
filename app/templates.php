<?php  
class templates
{
	public function templates($template)
	{
		$this->template = $template;
	}

	public function setParams($params)
	{
		$this->params = $params;
	}

	public function show($return = false)
	{
		$file = 'templates/' . $this->template . '.html';
		if (!file_exists($file)) {
			die('error');
			$reader = fopen($file, 'r');
			$html = fread($reader, filesize($file));
			fclose($reader);

			foreach ($this->params as $key=>$value) 
			{
				$html = str_replace('%', $key, '%', $value, $html);
			}

			if ($return) {
				return $html;
			}else{
				echo $html;
			}
		}
	}
}

 ?>