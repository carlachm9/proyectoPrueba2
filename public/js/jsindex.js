function cambiarLugar() {
	var name = $('#selCiudad').val();
	$('#evento').css('display','block');
	if(name == 'CDMX'){
		$('#lug').text("Haciendo los Morales");
		$('#ulug').attr({"href":"https://www.haciendadelosmorales.com/"})
		$('#dir').text("Av Juan Vázquez de Mella 525, Del Bosque, 11510 Miguel Hidalgo, CDMX");
		$('#cardEvento').css('background-color','rgb(159, 212, 201)');
		$('#map').attr({"src":"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4926003201513!2d-99.21140878453375!3d19.434317286883257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2021ed8b19fc5%3A0x1b803634341b80a9!2sHacienda+de+Los+Morales!5e0!3m2!1ses!2spe!4v1536339670051"})
	}else if (name == 'Mérida') {
		$('#lug').text("Holiday inn Merida");
		$('#dir').text("Av. Colón Núm. 498 x 60 y Paseo de Montejo C.P. 97000 Mérida, Yucatán, México");
		$('#cardEvento').css('background-color','rgb(117, 118, 121)');
		$('#map').attr({"src":"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.17589217444!2d-89.62112218451415!3d20.985585286021816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715a77cdc1d3%3A0x4ab68a6e562c4ba4!2sAv.+Colon+498%2C+Centro%2C+97000+M%C3%A9rida%2C+Yuc.%2C+M%C3%A9xico!5e0!3m2!1ses!2spe!4v1536340255995"})
	}else if (name == 'Guadalajara') {
		$('#lug').text("Holiday inn Guadalajara Select");
		$('#dir').text("Av. Niños Héroes 3089 Esq. López Mateos Col. Jardines de los Arcos C.P. 44500 Guadalajara, Jalisco");
		$('#cardEvento').css('background-color','rgb(0, 131, 117)');
		$('#map').attr({"src":"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.0843613125576!2d-103.39397358451828!3d20.66614658619594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae7717e6a48d%3A0x6ac7693d097339e2!2sHoliday+Inn+Guadalajara+Select!5e0!3m2!1ses!2spe!4v1536340433243"})
	}else if (name == 'Monterrey') {
		$('#lug').text("Holiday inn Monterrey Valle");
		$('#dir').text("Av. Lázaro Cárdenas no. 2305, Residencial San Agustín, C.P. 66260, San Pedro Garza Garcia, N.L.");
		$('#cardEvento').css('background-color','rgb(9, 72, 117)');
		$('#map').attr({"src":"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.606069661524!2d-100.34496720176006!3d25.65119664385348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bddec4a395d9%3A0xecdbb983009020c2!2sProsperia!5e0!3m2!1ses!2spe!4v1536340556859"})
	}else  {
		$('#lug').text("Holiday inn León");
		$('#dir').text("Blvd. Adolfo Lopez Mateso Lote 1308 Col. Los Gavilanes");
		$('#cardEvento').css('background-color','rgb(159, 212, 201)');
		$('#map').attr({"src":"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.8501248719163!2d-101.66553028451237!3d21.118540585949784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbf0070b8b1ed%3A0x7b2a14102eca5d1b!2sBlvd.+Adolfo+L%C3%B3pez+Mateos+1308%2C+La+Martinica%2C+37500+Le%C3%B3n%2C+Gto.%2C+M%C3%A9xico!5e0!3m2!1ses!2spe!4v1536340658098"})
	}
}



