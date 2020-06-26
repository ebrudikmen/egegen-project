import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Observable} from 'rxjs';
import {map} from 'rxjs/operators';
import {Menu} from '../../model/menu/menu';

@Injectable({
    providedIn: 'root'
})
export class MenuService {

    menuUrl;

    constructor(private http: HttpClient) {
        this.menuUrl = 'http://127.0.0.1:8000/api/menus';
    }

    public retrieveAllMenus(): Observable<Menu[]> {
        return this.http.get(this.menuUrl).pipe(
            map((response: any) => {
                return response.data;
            }));
    }


}
