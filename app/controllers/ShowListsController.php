<?php

class ShowListsController extends \BaseController {


	public function index() {
		return Redirect::to('history');
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
		$p_obj_history = History::find($v_int_id);
		// $p_obj_historyDate = HistoryList::where('history_id','=',$v_int_id)->GroupBy('time')->get()->toJson();
		$p_obj_historyDate = DB::select(DB::raw("SELECT GROUP_CONCAT(id)AS id, DATE_FORMAT(time,\"%Y-%m-%d\") AS time FROM `history_list` WHERE history_id = ".$v_int_id." GROUP BY DATE_FORMAT(time,\"%Y-%m-%d\") ORDER BY time "));
		foreach ($p_obj_historyDate as $key => $value) {
			$ary = explode(",", $value->id);

			$p_ary_data[$value->time] = HistoryList::whereIn('id',$ary)->get()->toArray();
			
		}

		foreach ($p_ary_data as $key => $value) {

			foreach ($value as $key2 => $value2) {
				if( $key2 % 2 == 1) 
					$p_ary_newData[$key][1][] = $value2;
				else
					$p_ary_newData[$key][0][] = $value2;
			}
		}
		// show the view and pass the history to it
		return View::make('test', array('history' => $p_ary_newData, 'history_title' => $p_obj_history->history));
	}


}
?>