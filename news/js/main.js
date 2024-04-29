/**показать больше**/
Create_More_Items_System(6, 6, '.more_items_box', '.news_item', 'hide');

function Create_More_Items_System(number_initially_visible, delta_items, selector_button_parent, selector_item, hide_class)
{
	var all_elements = document.querySelectorAll(selector_item);
	var amount = all_elements.length;
	if(amount != 0)
	{
		if (amount  > number_initially_visible)
		{
			var j = 0;
			for (let item of all_elements)
			{
				j++;
				if(j > number_initially_visible)
				{
					item.classList.add(hide_class);
				}
			}

			var parent = document.querySelector(selector_button_parent);
			
			parent.innerHTML = `
				<div class="more_box">
					<div class="text_arrow">
						<div>Показать ещё</div>
						<svg class="little_arrow" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 7H16.5M16.5 7L11 12.5M16.5 7L11 1.5" stroke="white" stroke-width="2"></path>
						</svg>
					</div>

					<svg class="big_arrow hide" width="79" height="14" viewBox="0 0 79 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 7H77.5M77.5 7L71 12.5M77.5 7L72 1.5" stroke="white" stroke-width="2"></path>
					</svg>
				</div>
			`;
			
			Click_Button_More_Items(delta_items, all_elements, '.more_items_box', 'hide');
		}
	}
}

function Click_Button_More_Items(num_records, elements_reff, button_selector, hide_class)
{
	document.querySelector(button_selector).addEventListener("click", function(){
	    var num = 0;
	    for (let item of elements_reff)
	    {
	        if((item.classList.contains(hide_class)) && (num < num_records))
	        {
	            item.classList.remove(hide_class);
	            num++;
	        }
	    }
	    if (num == 0)
	    {
	        document.querySelector(button_selector).remove();
	    }
	});
}
/**показать больше**/