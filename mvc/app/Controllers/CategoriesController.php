<?php
class CategoriesController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('category', 'cat');
        //       echo"This is cat construct";
    }
    public function index()
    {
        $cond='';
        if($kw=isset(request()->get['keyword'])? request()->get['keyword']:'')
        {
        // if(isset(request()->get['keyword']))
        // {
        //     $kw=request()->get['keyword'];
        $cond=" (name like '%$kw%' or des like '%$kw%') ";
    }
    //dd( $this->cat->fetchData('*',$cond));
      $this->view->loadView('categories/index',
            ['catdata' => $this->cat->fetchData('*',$cond)]);
    }
    public function create()
    {
        $this->view->loadView('categories/create');
    }
    public function store()
    {
        $info = [
            'name' => request()->post['name'],
            'des' => request()->post['des']
        ];
        //dd($info);
        if ($this->cat->submitData($info)) {
            Session::set('success', "Barabar Data ghaldiyo!");
            redirect('categories');
        } else {
           Session::set('error', "kuch toh gadbad hee daya!!");
        }
    }
    public function edit($id)
    {
        $id = base64_decode(urldecode($id));
        $this->view->loadView('categories/edit', ['info' => $this->cat->fetchInfo($id), 'id' => $id]);
        //  dd($this->cat->fetchInfo($id));
    }
    public function update($id)
    {
        $id = base64_decode(urldecode($id));
        $info = [
            'name' => request()->post['name'],
            'des' => request()->post['des']
        ];
        if ($this->cat->submitData($info, $id)) {
            echo "Data submited successfully!";
            redirect('categories');
        } else {
            echo "Kuch toh gadbad hee daya!! ";
        }
    }
    public function destroy($id)
    {
        $id = base64_decode(urldecode($id));
        $this->cat->deleteRecord($id);
        redirect('categories');
    }
}
