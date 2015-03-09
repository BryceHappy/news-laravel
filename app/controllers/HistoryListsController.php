<?php

class HistoryListsController extends \BaseController {

	private $p_ary_rules = array(
			'history_id'       => 'required',
			'content'       => 'required',
			'pic_url' => 'sometimes|url',
			'ref_url' => 'sometimes|url',
			'time'      => 'required',
			'other_edit' => 'required|numeric'
		);

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the history
		$p_obj_historyList = HistoryList::with('user')->paginate(15);

		// load the view and pass the history
		return View::make('list.index')
			->with('history', $p_obj_historyList);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{				
		if(Session::has('history_id')) {
			// $p_int_history_CryptId = Crypt::encrypt("hisTory@".Session::get('history_id'));
			$p_int_historyId = Session::get('history_id');
			$p_obj_lastHistory = HistoryList::where('history_id','=',$p_int_historyId)->OrderBy('id','DESC')->first();
			$p_str_last_time = $p_obj_lastHistory->time;
			$p_int_history_CryptId = Crypt::encrypt("hisTory@".$p_int_historyId);
			Session::flash('history_id', $p_int_historyId);
            return View::make('list.create', array('history_id' => $p_int_history_CryptId, 'last_time' => $p_str_last_time));						
		} else {			
			Session::flash('message', '請先選擇懶人包！');
			return Redirect::to('history');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make(Input::all(), $this->p_ary_rules);

		// process the login
		if ($validator->fails()) {
			$decrypted = Crypt::decrypt(Input::get('history_id'));
			$ary_id = explode("@", $decrypted);
			Session::flash('history_id', $ary_id[1]);
			return Redirect::to('list/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$decrypted = Crypt::decrypt(Input::get('history_id'));
			$ary_id = explode("@", $decrypted);
			// store
			$p_obj_historyList = new HistoryList;
			$p_obj_historyList->content       = Input::get('content');
			$p_obj_historyList->time      = Input::get('time');
			$p_obj_historyList->other_edit = Input::get('other_edit');
			$p_obj_historyList->pic_url = Input::get('pic_url');
			$p_obj_historyList->ref_url = Input::get('ref_url');
			$p_obj_historyList->history_id = $ary_id[1];
			$p_obj_historyList->user_id = 3;
			$p_obj_historyList->save();

			// redirect
			Session::flash('message', '建立成功！');
			return Redirect::to('history/'.$ary_id[1]);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $v_int_id
	 * @return Response
	 */
	public function show($v_int_id)
	{
		// get the history
		$p_obj_historyList = HistoryList::find($v_int_id);

		// show the view and pass the history to it
		return View::make('list.show')
			->with('history', $p_obj_historyList);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $v_int_id
	 * @return Response
	 */
	public function edit($v_int_id)
	{
		// get the history
		$p_obj_historyList = HistoryList::find($v_int_id);		
		$p_int_history_CryptId = Crypt::encrypt("hisTory@".$p_obj_historyList->history_id);
		// show the edit form and pass the history
		return View::make('list.edit', array('lists' => $p_obj_historyList, 'history_id' => $p_int_history_CryptId));			
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $v_int_id
	 * @return Response
	 */
	public function update($v_int_id)
	{

		$validator = Validator::make(Input::all(), $this->p_ary_rules);

		// process the login
		if ($validator->fails()) {
			$decrypted = Crypt::decrypt(Input::get('history_id'));
			$ary_id = explode("@", $decrypted);
			Session::flash('history_id', $ary_id[1]);
			return Redirect::to('list/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$decrypted = Crypt::decrypt(Input::get('history_id'));
			$ary_id = explode("@", $decrypted);
			// store
			$p_obj_historyList = HistoryList::find($v_int_id);
			$p_obj_historyList->content       = Input::get('content');
			$p_obj_historyList->time      = Input::get('time');
			$p_obj_historyList->other_edit = Input::get('other_edit');
			$p_obj_historyList->pic_url = Input::get('pic_url');
			$p_obj_historyList->ref_url = Input::get('ref_url');
			$p_obj_historyList->history_id = $ary_id[1];
			$p_obj_historyList->user_id = 3;
			$p_obj_historyList->save();

			// redirect
			Session::flash('message', '更新成功！');
			return Redirect::to('history/'.$ary_id[1]);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $v_int_id
	 * @return Response
	 */
	public function destroy($v_int_id)
	{		
		// delete
		$p_obj_historyList = HistoryList::find($v_int_id);
		$p_int_historyId = $p_obj_historyList->history_id;
		$p_obj_historyList->delete();

		// redirect
		Session::flash('message', '刪除成功！');
		return Redirect::to('history/'.$p_int_historyId);
	}

}