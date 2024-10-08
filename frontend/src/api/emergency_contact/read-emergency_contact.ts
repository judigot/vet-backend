/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IEmergencyContact } from "../../interfaces/interfaces";

type IBody = IEmergencyContact;

export const readEmergencyContact = async (): Promise<IBody[] | null> => {
  const result: IBody[] | null = await customFetch.get({
    url: `/emergency_contacts`,
  });
  return result;
};

