import {Component, OnInit} from '@angular/core';
import {ContentService} from '../../service/content/content.service';
import {Content} from '../../model/content/content';

@Component({
    selector: 'app-content',
    templateUrl: './content.component.html',
    styleUrls: ['./content.component.css']
})
export class ContentComponent implements OnInit {

    contentList: Content[];

    constructor(private contentService: ContentService) {
        this.contentList = [];
    }

    ngOnInit(): void {
        this.contentService.retrieveAllContents().subscribe(contentList => {
                this.contentList = contentList;
            }
        );
    }
}
