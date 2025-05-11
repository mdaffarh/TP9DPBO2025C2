<?php

/******************************************
 Asisten Pemrogaman 13 & 14
 ******************************************/

interface KontrakView
{
	public function tampil();
	public function create();
	public function edit($id);
	public function add($data);
	public function update($data);
	public function delete($id);
}
