import {Component, OnInit} from '@angular/core';
import {Menu} from '../../model/menu/menu';
import {MenuService} from '../../service/menu/menu.service';

@Component({
    selector: 'app-menu',
    templateUrl: './menu.component.html',
    styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {


    menuList: Menu[];

    constructor(private menuService: MenuService) {
        this.menuList = [];
    }

    ngOnInit(): void {
        this.menuService.retrieveAllMenus().subscribe(menuList => {
                this.menuList = menuList;
            }
        );
    }

}
